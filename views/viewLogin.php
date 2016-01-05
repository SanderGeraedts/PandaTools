<?php
/**
 * Created by PhpStorm.
 * User: sande
 * Date: 25/11/2015
 * Time: 16:04
 */

namespace PandaViews;

require('/../logic/User.php');
require('/../logic/Database.php');

use PandaLogic\User;


class viewLogin{

    private $username;
    private $password;


    public function checkLogin($username, $password)
    {
        $this->username = $username;
        $this->password = $password;

        $user =  User::CheckLogin($this->username, $this->password);
        $_SESSION["loggedIn"] = serialize($user);

        header('Location: index.php');
    }
}