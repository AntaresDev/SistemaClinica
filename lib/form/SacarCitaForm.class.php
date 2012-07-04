<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
Class SacarCitaForm extends sfForm{
    public function configure(){
        $this->setWidgets(array(
           'cliente' => new sfWidgetFormInput(),
           'fecha' => new sfWidgetFormDate(), 
        ));
    }
}
?>
