<?php
/**
 * Created by PhpStorm.
 * User: Sander Geraedts
 * Date: 07/11/2015
 * Time: 17:06
 */

namespace PandaLogic;

class Database{

    /**
     *  Initializes the Database object
     */
    function __construct(){

    }

    public static function checkLogIn($username, $password){
        if($username == 'admin' && $password == 'admin'){
            return true;
        }
        else{
            return false;
        }
    }
}