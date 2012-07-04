<?php

/**
 * TipoCitas form base class.
 *
 * @method TipoCitas getObject() Returns the current form's model object
 *
 * @package    sistemacitas
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTipoCitasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_tipo' => new sfWidgetFormInputHidden(),
      'nombre'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_tipo' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_tipo')), 'empty_value' => $this->getObject()->get('id_tipo'), 'required' => false)),
      'nombre'  => new sfValidatorString(array('max_length' => 15)),
    ));

    $this->widgetSchema->setNameFormat('tipo_citas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TipoCitas';
  }

}
