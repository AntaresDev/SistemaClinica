<?php

/**
 * Clientes filter form base class.
 *
 * @package    sistemacitas
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseClientesFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombres'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'direccion'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'nombres'     => new sfValidatorPass(array('required' => false)),
      'direccion'   => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('clientes_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Clientes';
  }

  public function getFields()
  {
    return array(
      'id_clientes' => 'Number',
      'nombres'     => 'Text',
      'direccion'   => 'Text',
    );
  }
}
