<?php
/**
 * Created by PhpStorm.
 * User: sande
 * Date: 25/11/2015
 * Time: 16:05
 */

namespace PandaViews;

require('logic/User.php');
require('logic/Project.php');
require('logic/Sprint.php');
require('logic/Database.php');

use PandaLogic\Project;
use PandaLogic\Sprint;
use PandaLogic\User;
use PandaLogic\Database;

class viewProjects
{

    private $loggedIn;

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

    public function populateTable(){
        $projects = $this->loggedIn->projects;
        $database = new Database();

        if($projects == null){
            $this->loggedIn->projects = $database->getProjectsForUser($this->loggedIn->id);

            $projects = $this->loggedIn->projects;
        }

        foreach($this->loggedIn->projects as $project){
            $project->sprints = $database->getSprintsForProject($project->id);
        }

        foreach($projects as $project) {

            $index = count($project->sprints);
            $index--;

            if($project->sprints != null && $index>=0) {
                $id = $project->id - 1;

                echo '<tr>
                    <td><a href="project.php?query=' . $id . '"' . '>'.$project->name.'</a></td>
                    <td>' . $project->sprints[$index]->title . '</td>
                    <td>' . $project->sprints[$index]->description . '</td>
                </tr>';
            } else{
                if($project->sprints == null){
                    echo 'sprints not set <br />';
                }

                if($index<0){
                    echo 'index lower than 0<br />';
                }
            }
        }

        $this->loggedIn->projects = $projects;
        $_SESSION["loggedIn"] = serialize($this->loggedIn);
    }
}