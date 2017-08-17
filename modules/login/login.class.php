<?php
    class login{
        public function __construct($module){
            //datos necesarios
            $this->app = new iGcore();
            $this->app->module = $module;
            $this->init();
        }
        private function init(){
            //Personalizable
            //$this->app->module->write('{ title }',"Login");
        }
    }
?>