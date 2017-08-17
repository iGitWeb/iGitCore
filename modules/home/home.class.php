<?php
    require_once("bin/core/iGit.core.php");
    
    class home {
        public function __construct($module){
            //datos necesarios
            $this->app = new iGcore();
            $this->app->module = $module;
            $this->init();
        }
        private function init(){
            //Personalizable
            $this->listActivities();
        }
        
        private function listActivities(){
            
        }
    }

?>