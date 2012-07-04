<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

Class IdentificaForm extends sfForm{
    public function configure(){
        $this->setWidgets(array(
           'usuario' => new sfWidgetFormInput(),
           'contrasena' => new sfWidgetFormInput(), 
        ));
    }
}


?>
