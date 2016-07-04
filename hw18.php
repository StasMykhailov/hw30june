<?php
/**
 * Created by PhpStorm.
 * User: Stas
 * Date: 04.07.2016
 * Time: 14:31
 */

spl_autoload_register(function($class){
    require_once $class.'.php';
});
