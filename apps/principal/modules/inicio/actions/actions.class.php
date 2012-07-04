<?php

/**
 * inicio actions.
 *
 * @package    sistemacitas
 * @subpackage inicio
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class inicioActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    
  }
  public function executeAcerca(sfWebRequest $request)
  {
    
  }
  public function executeConsulta(sfWebRequest $request)
  {
      $this -> formulario = new SacarCitaForm();
      
      $resultado="";
      if($request-> isMethod('post')){
          $peticion['idCliente'] = $request->getParameter("cliente");
          $fecha = $request->getParameter("fecha");
          $peticion['fecha'] = $fecha['year'].'-'.$fecha['month'].'-'.$fecha['day'];
          $resultado = Citas::ingresarCita($peticion);          
      }
      $this->resultado = $resultado;
    
  }
}
