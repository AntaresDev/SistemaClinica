<?php

/**
 * Citas form base class.
 *
 * @method Citas getObject() Returns the current form's model object
 *
 * @package    sistemacitas
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCitasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_citas'    => new sfWidgetFormInputHidden(),
      'fecha'       => new sfWidgetFormDateTime(),
      'id_clientes' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Clientes'), 'add_empty' => false)),
      'id_tipo'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TipoCitas'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id_citas'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_citas')), 'empty_value' => $this->getObject()->get('id_citas'), 'required' => false)),
      'fecha'       => new sfValidatorDateTime(),
      'id_clientes' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Clientes'))),
      'id_tipo'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TipoCitas'))),
    ));

    $this->widgetSchema->setNameFormat('citas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Citas';
  }

}
