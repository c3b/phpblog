<?php
session_start();

function custom_autoload($class_name){
        $dirs = array('app', 'class'); 
        foreach($dirs as $dir){ 
            $file = $dir.'/'.ucfirst($class_name). '.php';
            if (file_exists($file)){
               require $file;
               
             }
        }
 }

    spl_autoload_register('custom_autoload');