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

    /**
     * @param $id           int:
     * @param $username     string:
     * @param $password     string:
     * @param $job          string:     Either Job or Client
     * @param $contact      Contact:
     * @param $projects     Project:
     */

    public static function checkLogIn($username, $password){
        if($username == 'admin' && $password == 'admin'){
            return new User(array('id'=>1, 'username'=>$username, 'password'=>$password));
        }
        else{
            return false;
        }
    }
}