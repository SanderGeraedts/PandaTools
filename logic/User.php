<?php
/**
 * Created by PhpStorm.
 * User: Sander Geraedts
 * Date: 29/10/2015
 * Time: 21:29
 */

namespace PandaLogic {



    class User
    {
        private $id;
        private $username;
        private $password;
        private $job;
        private $contact;
        private $projects;

        public function getId(){ return $this->id; }
        public function getUsername(){ return $this->id; }
        public function getPassword(){ return $this->id; }
        public function getJob(){ return $this->id; }
        public function getContact(){ return $this->id; }
        public function getProjects(){ return $this->id; }

        public function setUsername($value){ $this->username = $value; }
        public function setPassword($value){ $this->username = $value; }
        public function setJob($value){ $this->username = $value; }
        public function setContact($value){ $this->username = $value; }

        public function addProject($value){ array_push($this->projects, $value); }

        public function removeProject($value){
            $key = array_search($value, $this->projects);
            if($key != false){
                unset($this->projects[$key]);
                return true;
            }
            else{
                return false;
            }
        }

        /**
         * @param $id           int:
         * @param $username     string:
         * @param $password     string:
         * @param $job          string:     Either Job or Client
         * @param $contact      Contact:
         * @param $projects     Project:
         */
        public function __construct($id, $username, $password, $job, $contact, $projects)
        {
            $this->id = $id;
            $this->username = $username;
            $this->password = $password;
            $this->job = $job;
            $this->contact = $contact;

            if($projects != null && isset($projects)){
                $this->projects = $projects;
            }
            else{
                $this->projects = array();
            }
        }



        /**
         * @param $username     string:
         * @param $password     string:
         * @return $user        User:       null if credentials are not found
         */
        public static function CheckLogin($username, $password)
        {
            $user = Database::checkLogIn($username, $password);

            if (isset($user)) {
                return $user;
            } else {
                return null;
            }
        }
    }
}