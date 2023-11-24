<?php

spl_autoload_register(function ($class_name) {
    $name = str_replace('App\\', DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR, $class_name);
    require_once(__DIR__.$name.'.php');
});
