<?php
    
    class App{
        public $dir = '/tourin/website1_0/';#vacío si es directorio raíz
        //public $dir = '';#vacío si es directorio raíz
        public function setModules(){
            $this->modules = array(
                'home' => (object) array(
                    //Necesarios
                    'themeFile' => 'blank.php',
                    'title' => 'iGitCore | Home',
                    'html' => 'home.html',
                    'fnc' => 'home.class.php',
                    //Opcionales
                    'css' => 'home.css',
                    'js' => 'home.js',
                    'name' => 'Home',
                    'description' => 'Small Description'
                ),
                '404' => (object) array(
                    //Necesarios
                    'themeFile' => 'pages-404.php',
                    'title' => 'iGitCore | Page not found'
                ),
                'database' => (object) array(
                    //Necesarios
                    'fnc' => 'database.class.php',
                    //Opcionales
                    'name' => 'Database'
                ),
                'login' => (object) array(
                    //Necesarios
                    'themeFile' => 'index-banners.php',
                    'title' => 'iGitCore | Sign In',
                    'html' => 'login.html',
                    'fnc' => 'login.class.php',
                    //Opcionales
                    'css' => 'login.css',
                    'js' => 'login.js',
                    'name' => 'Sign In'
                ),
                'register' => (object) array(
                    //Necesarios
                    'themeFile' => 'index-banners.php',
                    'title' => 'TourIn | Sign Up',
                    'html' => 'register.html',
                    'fnc' => 'register.class.php',
                    //Opcionales
                    'css' => 'register.css',
                    'js' => 'register.js',
                    'name' => 'Sign Up'
                ),
            );
        }
    }

?>