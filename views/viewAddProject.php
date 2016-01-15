<?php
/**
 * Created by PhpStorm.
 * User: sande
 * Date: 12/01/2016
 * Time: 19:29
 */

namespace PandaViews;

require('logic/Database.php');
require('logic/User.php');
require('logic/Project.php');

use PandaLogic\Database;
use PandaLogic\User;
use PandaLogic\Project;

class viewAddProject
{
    private $loggedIn;
    private $database;
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

    public function addProject(){
        if(isset($_POST['btnContact'])){
            $this->database = new Database();
            $project = $this->database->addProject($_POST['tbName'], $_POST['tbDescription']);
            if($project != false){
                header('Location: Contact.php?project=' . $project->id);
            }
        }
        if(isset($_POST['btnSprint'])){
            $this->database = new Database();
            $project = $this->database->addProject($_POST['tbName'], $_POST['tbDescription']);
            if($project != false){
                header('Location: Sprint.php?project=' . $project->id);
            }
        }
        if(isset($_POST['btnSave'])){
            $this->database = new Database();
            $project = $this->database->addProject($_POST['tbName'], $_POST['tbDescription']);
            if($project != false){
                header('Location: Project.php?project=' . $project->id);
            }
        }
    }
}