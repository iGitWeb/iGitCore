<?php
    class iGcore{
        public function __construct($dir = ''){
            require_once($dir."bin/core/modules.class.php");
            require_once($dir."bin/app.class.php");
            require_once($dir."theme/theme.class.php");
            $this->app = new App();
            $this->theme = new Theme();
            $this->app->setModules();
            $this->module = new Module($this->app,$this->theme);
        }
    }

?>