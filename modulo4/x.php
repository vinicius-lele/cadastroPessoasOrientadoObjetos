<?php
spl_autoload_register(function($class){
    require_once(str_replace('\\','/', $class).'.php');
});

var_dump(new \Library\Widgets\Field);