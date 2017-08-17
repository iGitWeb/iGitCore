<?php
    
    class Theme{
        public function __construct(){
            
        }
        
        public function customContent($modules,$module,$content){
            $desc = '';
            if(isset($modules[$module]->description)) $desc = $modules[$module]->description;
            $content = str_replace('{ page->description }', $desc, $content);
            
            
            return $content;
        }
    }

?>