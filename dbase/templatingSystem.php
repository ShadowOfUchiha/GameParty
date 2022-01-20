<?php

/**
 * [templating description] 
 */

 class TemplatingSystem {
    public $file = 'default.tpl';
    private $errors ='';

     function __construct($template = ""){

        $this->template = $template;
     }

     function readTemplate(){
        if(file_exists($this->template)){
            $this->tpl = file_get_contents($this->template);
            $this->readTemplate = true;
            return $this->tpl;
        }else{
            return false;
        }


     }

     function setTemplateData(){

        if($this->readTemplate == false){
            $this->readTemplate();
            
        }
            $this->tpl = preg_replace("$#/{".$pattern."\}#si", $replacement ,$this->tpl);
            
        
     }

     function parseTemplate(){
         if($this->readTemplate == true) {
             return $this-tpl;
         }
 }