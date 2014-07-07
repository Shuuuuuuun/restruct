<?php
/**
 * Created by PhpStorm.
 * User: kimura
 * Date: 14/07/07
 * Time: 17:43
 */

class ClassLoader
{
    protected $dirs;

    public function register()
    {
        spl_autoload_register(array($this, 'loadClass'));
    }

    public function registerDir($dir)
    {
        $this->dirs[]= $dir;
    }

    public function loadClass($class)
    {
        foreach($this->dirs as $dir){
            $file = $dir . '/' . $class . '.php';
            if(is_readable($file)){
                require $file;

                return;
            }
        }
    }
} 