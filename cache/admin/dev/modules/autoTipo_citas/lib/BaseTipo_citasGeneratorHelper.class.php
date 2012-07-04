<?php

/**
 * tipo_citas module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage tipo_citas
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: helper.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTipo_citasGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'tipo_citas' : 'tipo_citas_'.$action;
  }
}
