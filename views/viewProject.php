<?php
/**
 * Created by PhpStorm.
 * User: sande
 * Date: 25/11/2015
 * Time: 16:05
 */

namespace PandaViews;

require('logic/User.php');
require('logic/Contact.php');
require('logic/Project.php');
require('logic/Sprint.php');
require('logic/Database.php');

use PandaLogic\Database;
use PandaLogic\Project;
use PandaLogic\Sprint;
use PandaLogic\User;
use PandaLogic\Contact;

class viewProject
{
    private $loggedIn;
    private $project;

    public function __construct(){
        if($_SESSION["loggedIn"] != null && $_SESSION["loggedIn"] != false){
            $this->loggedIn = unserialize($_SESSION["loggedIn"]);
        }
        else{
            header('Location: login.php');
            $_SESSION["lastPage"] = __FILE__;
            die();
        }

        if($_GET['query'] == null) {
            header('Location: index.php');
            die();
        }

        $this->project = $this->loggedIn->projects[$_GET['query']];
    }

    public function __destruct(){
        $_SESSION['loggedIn'] = serialize($this->loggedIn);
    }

    public function getProjectId(){
        echo $this->project->id;
    }

    public function loadContacts(){
        $database = new Database();
        $this->project->contacts = $database->getContactsForProject($this->project->id);

        foreach ($this->project->contacts as $contact) {
            echo '
                <tr>
                    <td>' . $contact->name . '</td>
                    <td><a href="mailto:' . $contact->email .'?Subject=Code%20Panda">' . $contact->email .'</a></td>
                    <td>' . $contact->function .'</td>
                </tr>
            ';
        }

    }

    public function loadSprints(){
        $database = new Database();
        $this->project->sprints = $database->getSprintsForProject($this->project->id);

        foreach($this->project->sprints as $sprint) {
            $id = $this->project->id - 1;

            echo '
                <section class="sprint">
                    <a href="project.php?query='. $id . '&sprint=' . $sprint->id . '">' . $sprint->title . '</a>
                    <b>Time spent / allocated:</b> <span class="hrsSpent">' . $sprint->timeSpent . '</span> / <span class="hrsAllocated">' . $sprint->timeAllocated . '</span> hrs
                    <b>Description:</b> <span class="sprintDescription">' . $sprint->description . '</span>
                </section>';
        }
    }
}