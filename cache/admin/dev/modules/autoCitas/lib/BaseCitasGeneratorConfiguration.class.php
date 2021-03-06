<?php

/**
 * citas module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage citas
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCitasGeneratorConfiguration extends sfModelGeneratorConfiguration
{
  public function getActionsDefault()
  {
    return array();
  }

  public function getFormActions()
  {
    return array(  '_delete' => NULL,  '_list' => NULL,  '_save' => NULL,  '_save_and_add' => NULL,);
  }

  public function getNewActions()
  {
    return array();
  }

  public function getEditActions()
  {
    return array();
  }

  public function getListObjectActions()
  {
    return array(  '_edit' => NULL,  '_delete' => NULL,);
  }

  public function getListActions()
  {
    return array(  '_new' => NULL,);
  }

  public function getListBatchActions()
  {
    return array(  '_delete' => NULL,);
  }

  public function getListParams()
  {
    return '%%id_citas%% - %%fecha%% - %%id_clientes%% - %%id_tipo%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Citas List';
  }

  public function getEditTitle()
  {
    return 'Edit Citas';
  }

  public function getNewTitle()
  {
    return 'New Citas';
  }

  public function getFilterDisplay()
  {
    return array();
  }

  public function getFormDisplay()
  {
    return array();
  }

  public function getEditDisplay()
  {
    return array();
  }

  public function getNewDisplay()
  {
    return array();
  }

  public function getListDisplay()
  {
    return array(  0 => 'id_citas',  1 => 'fecha',  2 => 'id_clientes',  3 => 'id_tipo',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id_citas' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'fecha' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'id_clientes' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'id_tipo' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id_citas' => array(),
      'fecha' => array(),
      'id_clientes' => array(),
      'id_tipo' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id_citas' => array(),
      'fecha' => array(),
      'id_clientes' => array(),
      'id_tipo' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id_citas' => array(),
      'fecha' => array(),
      'id_clientes' => array(),
      'id_tipo' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id_citas' => array(),
      'fecha' => array(),
      'id_clientes' => array(),
      'id_tipo' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id_citas' => array(),
      'fecha' => array(),
      'id_clientes' => array(),
      'id_tipo' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'citasForm';
  }

  public function hasFilterForm()
  {
    return true;
  }

  /**
   * Gets the filter form class name
   *
   * @return string The filter form class name associated with this generator
   */
  public function getFilterFormClass()
  {
    return 'citasFormFilter';
  }

  public function getPagerClass()
  {
    return 'sfDoctrinePager';
  }

  public function getPagerMaxPerPage()
  {
    return 20;
  }

  public function getDefaultSort()
  {
    return array(null, null);
  }

  public function getTableMethod()
  {
    return '';
  }

  public function getTableCountMethod()
  {
    return '';
  }
}
