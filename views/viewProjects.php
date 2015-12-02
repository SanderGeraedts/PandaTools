<?php
/**
 * Created by PhpStorm.
 * User: sande
 * Date: 25/11/2015
 * Time: 16:05
 */

namespace PandaViews;

require('/../logic/Loader.php');

use PandaLogic\Project;
use PandaLogic\User;

class viewProjects
{

    private $loggedIn;

    public function __construct(){
        if($_SESSION["loggedIn"] != null && $_SESSION["loggedIn"] != false){
            $this->loggedIn = $_SESSION["loggedIn"];
        }
        else{
            header('Location: login.php');
            die();
        }

        $this->loggedIn = new User(1, 'Sander', 'Test', 'Job', null, null);

        $project1 = new Project(1, 'test1', null, null, null, null);
        $project2 = new Project(2, 'test2', null, null, null, null);
        $project3 = new Project(3, 'test3', null, null, null, null);

        $this->loggedIn->addProject($project1);
        $this->loggedIn->addProject($project2);
        $this->loggedIn->addProject($project3);
    }

    public function populateTable(){
        foreach($this->loggedIn->getProjects() as $project) {
            echo '<tr>
                    <td><a href="project.php?query="'. $project->getId() . '>Codepanda.nl</a></td>
                    <td>Designfase</td>
                    <td>This is test data just to fill up the table and to see how it looks like with a bunch of text writen in it. I thinks this just about covers it.</td>
                </tr>';
        }
    }
}