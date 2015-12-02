<?php
/**
 * Created by PhpStorm.
 * User: Sander Geraedts
 * Date: 02/12/2015
 * Time: 20:50
 */

function autoload ($className) {

    $file = dirname(__FILE__) . '/' . $className . '.php';
    if (file_exists($file)) {
        require $file;
    }
}

spl_autoload_register('autoload');

?>