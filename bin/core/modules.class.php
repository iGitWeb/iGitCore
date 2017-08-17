<?php
    class Module{
        private $content;
        public function __construct($app,$theme){
            $this->modules = $app->modules;
            $this->dir = $app->dir;
            $this->theme = $theme;
            $this->content = '';
        }
        
        public function getModule(){
            $this->path = '';
            $this->module = 'home';
            if(isset($_GET['module']))
                $this->module = $_GET['module'];
            $url = explode('/',$this->module);
            if(count($url)>0) $this->module = $url[0];
            for($i = 0;$i < count($url);$i++){
                if($i > 0) $this->path .= '/..';
                else $this->path .= '..';
            }
            if(count($url)==1) $this->path = '.';
            
            if(!isset($this->modules[$this->module])){
                $this->content = file_get_contents('theme/'.$this->modules['404']->themeFile);
                $this->content = str_replace('{ module->title }', $this->modules['404']->title, $this->content);
                $this->content = str_replace('{ module->path }', $this->path, $this->content);
                echo $this->content;
                exit;
            }
            
            //Necesarios
            $this->content = file_get_contents('theme/'.$this->modules[$this->module]->themeFile);
            $content = file_get_contents('modules/'.$this->module.'/'.$this->modules[$this->module]->html);
            $this->content = str_replace('{ module->content }', $content, $this->content);
            
            require_once("modules/$this->module/".$this->modules[$this->module]->fnc);
            eval("\$this->$this->module = new $this->module(\$this);");
            
            $this->content = str_replace('{ module->title }', $this->modules[$this->module]->title, $this->content);
            
            //Opcionales
            $css = '';
            if(isset($this->modules[$this->module]->css)) $css = '<link rel="stylesheet" href="'.$this->path.'/modules/'.$this->module.'/'.$this->modules[$this->module]->css.'">';
            $this->content = str_replace('{ module->style }', $css, $this->content);
            $js = '';
            if(isset($this->modules[$this->module]->js)) $js = '<script src="'.$this->path.'/modules/'.$this->module.'/'.$this->modules[$this->module]->js.'"></script>';
            $this->content = str_replace('{ module->script }', $js, $this->content);
            $name = '';
            if(isset($this->modules[$this->module]->name)) $name = $this->modules[$this->module]->name;
            $this->content = str_replace('{ module->name }', $name, $this->content);
            
            $meta = '';
            if(isset($this->modules[$this->module]->meta)) $meta = $this->modules[$this->module]->meta;
            $this->content = str_replace('{ module->meta }', $meta, $this->content);
            
            $this->content = str_replace('{ module->path }', $this->path, $this->content);
            $this->content = $this->theme->customContent($this->modules,$this->module,$this->content);
            echo $this->content;
        }
        public function required($mod,$dir = ''){
            require_once($dir."modules/$mod/".$this->modules[$mod]->fnc);
            eval("\$this->$mod = new $mod(\$this);");
        }
        public function write($mark,$content){
            $this->content = str_replace($mark, $content, $this->content);
        }
    }
?>