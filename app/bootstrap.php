<?php
/**
 * Created by PhpStorm.
 * User: samanjafari
 * Date: 13-Aug-18
 * Time: 9:46 PM
 */
require_once 'config/config.php';


spl_autoload_register(function ($className){
require_once 'lib/'. $className . '.php';
});