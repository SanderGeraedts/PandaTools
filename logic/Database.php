<?php
/**
 * Created by PhpStorm.
 * User: Sander Geraedts
 * Date: 07/11/2015
 * Time: 17:06
 */

namespace PandaLogic;

DEFINE ('DB_USER', 'sanderge_user');
DEFINE ('DB_PASSWORD', '93ihlVDv');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'sanderge_CP');

class Database
{
    private $conn;

    public function __construct(){
        $this->conn = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die('Could not connect to MySQL: ' . mysqli_connect_error());
    }

    public function __destruct(){
        mysqli_close($this->conn);
    }

    public function checkLogIn($username, $password){
        $sql = "SELECT * FROM CP_USER u WHERE u.Username = '" . $username . "' AND u.Password = '" . $password . "';";

        $command = @mysqli_query($this->conn, $sql);

        if($command){
            while($row = mysqli_fetch_array($command)) {
                $user = new User(array('id'=>$row['Id'], 'username'=>$row['Username'], 'password'=>$row['Password']));
            }
        }

        if(isset($user)){
            return $user;
        }else{
            return false;
        }
    }

    public function getProjectsForUser($id){
        $sql = "SELECT p.Id, p.Title, p.Description FROM PROJECT p, PROJECT_USERS u WHERE p.Id = u.ProjectId AND u.UserId = " . $id . ";";
        echo $sql;
        $command = @mysqli_query($this->conn, $sql);

        $projects = array();

        if($command){
            while($row = mysqli_fetch_array($command)) {
                $project = new Project(array('id'=>$row['Id'], 'name'=>$row['Title'], 'description'=>$row['Description']));

                array_push($projects, $project);
            }
        }

        return $projects;
    }

    public function getSprintsForProject($id){
        $sql = "SELECT s.id, s.Title, s.SprintOrder, s.TimeSpent, s.TimeAllocated, s.Description FROM SPRINT s, PROJECT p WHERE s.ProjectId = p.Id AND p.Id = " . $id . ";";

        $command = @mysqli_query($this->conn, $sql);

        $sprints = array();

        if($command){
            while($row = mysqli_fetch_array($command)) {
                $sprint = new Sprint(array('id'=>$row['id'],'title'=>$row['Title'], 'order'=>$row['SprintOrder'], 'timeSpent' => $row['TimeSpent'], 'timeAllocated'=>$row['TimeAllocated'], 'description'=>$row['Description']));

                array_push($sprints, $sprint);
            }
        }
        return $sprints;
    }
}