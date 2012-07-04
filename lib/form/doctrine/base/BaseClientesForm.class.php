<?php

/**
 * Clientes form base class.
 *
 * @method Clientes getObject() Returns the current form's model object
 *
 * @package    sistemacitas
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseClientesForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_clientes' => new sfWidgetFormInputHidden(),
      'nombres'     => new sfWidgetFormInputText(),
      'direccion'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_clientes' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_clientes')), 'empty_value' => $this->getObject()->get('id_clientes'), 'required' => false)),
      'nombres'     => new sfValidatorString(array('max_length' => 50)),
      'direccion'   => new sfValidatorString(array('max_length' => 70)),
    ));

    $this->widgetSchema->setNameFormat('clientes[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Clientes';
  }

}
