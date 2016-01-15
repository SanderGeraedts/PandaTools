<?php
/**
 * Created by PhpStorm.
 * User: Sander Geraedts
 * Date: 12/01/2016
 * Time: 13:51
 */

namespace PandaViews;

require('logic/Database.php');
require('logic/User.php');

use PandaLogic\Database;
use PandaLogic\User;


class viewAddContact{

    private $loggedIn;
    private $error = array();

    public function __construct(){
        if($_SESSION["loggedIn"] != null && $_SESSION["loggedIn"] != false){
            $this->loggedIn = unserialize($_SESSION["loggedIn"]);
        }
        else{
            header('Location: login.php');
            $_SESSION["lastPage"] = __FILE__;
            die();
        }
    }

    public function showError(){
        if(count($this->error) > 0){
            echo '<ul>';
            for($i = 0; $i < count($this->error); $i++){
                echo '<li>' . $this->error[$i] . '</li>';
            }
            echo '</ul>';
        }
    }

    public function addContact(){
        if(isset($_POST['btnSubmit'])){
            $projectId = 0;
            $name = "";
            $organisation = "";
            $address = "";
            $phoneNr = "";
            $email = "";
            $zipcode = "";
            $city = "";
            $function = "";

            if(!isset($_POST['tbName'])){
                array_push($this->error, "Name is not submitted");
            }
            if(!isset($_POST['tbJob'])){
                array_push($this->error, "Job is not submitted");
            }

            if(count($this->error) == 0){
                $projectId = $_POST['selProject'];
                $name = $_POST['tbName'];
                $organisation = $_POST['tbOrganisation'];
                $address = $_POST['tbAddress'];
                $phoneNr = $_POST['tbPhoneNumber'];
                $email = $_POST['tbEmail'];
                $zipcode = $_POST['tbZipcode'];
                $city = $_POST['tbCity'];
                $function = $_POST['tbJob'];

                $database = new Database();
                if($database->addContact($projectId, $name, $organisation, $address, $phoneNr, $email, $zipcode, $city, $function)){
                    $index = $projectId - 1;
                    header('Location: project.php?query=' . $index);
                    die();
                }else{
                    echo $projectId . '<br />';
                    echo $name . '<br />';
                    echo $organisation . '<br />';
                    echo $address . '<br />';
                    echo $phoneNr . '<br />';
                    echo $email . '<br />';
                    echo $zipcode . '<br />';
                    echo $city . '<br />';
                    echo $function . '<br />';
                }
            }
        }
    }

}