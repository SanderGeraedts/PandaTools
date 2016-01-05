<?php
/**
 * Created by PhpStorm.
 * User: sande
 * Date: 25/11/2015
 * Time: 16:05
 */

namespace PandaViews;

require('/../logic/Loader.php');
require('/../logic/User.php');
require('/../logic/Project.php');
require('/../logic/Sprint.php');

use PandaLogic\Project;
use PandaLogic\Sprint;
use PandaLogic\User;

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

//        $this->loggedIn = new User(array(1, 'Sander', 'Test', 'Job', null, null));
//
//        $project1 = new Project(array(1, 'test1', null, null, null, null));
//
//        $this->loggedIn->addProject($project1);
//        $this->loggedIn->addProject($project2);
//        $this->loggedIn->addProject($project3);
    }

    public function populateTable(){
        $projects = $this->loggedIn->projects;

        $sprints[] = new Sprint(array('id'=>1, 'title'=>'Onderzoeksfase', 'order'=>1, 'timeSpent'=>25, 'timeAllocated'=>40,'description'=>'test'));
        $sprints[] = new Sprint(array('id'=>2, 'title'=>'Design Fase', 'order'=>2, 'timeSpent'=>25, 'timeAllocated'=>40,'description'=>'test'));
        $sprints[] = new Sprint(array('id'=>3, 'title'=>'Implementeer Fase', 'order'=>3, 'timeSpent'=>25, 'timeAllocated'=>40,'description'=>'test'));

        $sprints1[] = new Sprint(array('id'=>1, 'title'=>'Onderzoeksfase', 'order'=>1, 'timeSpent'=>25, 'timeAllocated'=>40,'description'=>'test'));
        $sprints1[] = new Sprint(array('id'=>2, 'title'=>'Design Fase', 'order'=>2, 'timeSpent'=>25, 'timeAllocated'=>40,'description'=>'Dit is een voorbeeld tekst.'));

        $sprints2[] = new Sprint(array('id'=>1, 'title'=>'Onderzoeksfase', 'order'=>1, 'timeSpent'=>25, 'timeAllocated'=>40,'description'=>'test'));
        $sprints2[] = new Sprint(array('id'=>2, 'title'=>'Design Fase', 'order'=>2, 'timeSpent'=>25, 'timeAllocated'=>40,'description'=>'test'));
        $sprints2[] = new Sprint(array('id'=>3, 'title'=>'Implementeer Fase', 'order'=>3, 'timeSpent'=>25, 'timeAllocated'=>40,'description'=>'test'));
        $sprints2[] = new Sprint(array('id'=>4, 'title'=>'Test Fase', 'order'=>3, 'timeSpent'=>25, 'timeAllocated'=>40,'description'=>'In deze fase zijn we aan het testen of het project zin heeft gehad.'));

        $projects[] = new Project(array('id'=>1, 'name'=>'PC Amitie', 'description'=>'This is a description', 'sprints'=>$sprints));
        $projects[] = new Project(array('id'=>2, 'name'=>'VVNBest','description'=>'This is another description', 'sprints'=>$sprints1));
        $projects[] = new Project(array('id'=>3, 'name'=>'Code Panda','description'=>'This is the last description', 'sprints'=>$sprints2));

        foreach($projects as $project) {
            $index = count($project->sprints);
            $index--;

            if($project->sprints != null && $index>=0) {
                echo '<tr>
                    <td><a href="project.php?query=' . $project->id . '"' . '>'.$project->name.'</a></td>
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
    }
}