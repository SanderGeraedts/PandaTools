<?php
/**
 * Created by PhpStorm.
 * User: Sander Geraedts
 * Date: 29/10/2015
 * Time: 21:29
 */

require 'Database.php';

class User{
    private $id;
    private $username;
    private $password;
    private $job;

    /**
     * @param $id           int:
     * @param $username     string:
     * @param $password     string:
     * @param $job          string: Either Job or Client
     */
    public function __construct($id, $username, $password, $job){
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->job = $job;
    }

    /**
     * @param $username     string:
     * @param $password     string:
     * @return $user        User: null if credentials are not found
     */
    public static function CheckLogin($username, $password){
        $user = Database::checkLogIn($username, $password);

        if(isset($use)){
            return $user;
        }
        else{
            return null;
        }
    }
}