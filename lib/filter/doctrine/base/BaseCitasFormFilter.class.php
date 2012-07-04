<?php

/**
 * Citas filter form base class.
 *
 * @package    sistemacitas
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseCitasFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'fecha'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'id_clientes' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Clientes'), 'add_empty' => true)),
      'id_tipo'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TipoCitas'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'fecha'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'id_clientes' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Clientes'), 'column' => 'id_clientes')),
      'id_tipo'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TipoCitas'), 'column' => 'id_tipo')),
    ));

    $this->widgetSchema->setNameFormat('citas_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Citas';
  }

  public function getFields()
  {
    return array(
      'id_citas'    => 'Number',
      'fecha'       => 'Date',
      'id_clientes' => 'ForeignKey',
      'id_tipo'     => 'ForeignKey',
    );
  }
}
