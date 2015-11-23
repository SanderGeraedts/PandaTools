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

        /**
         * @param $id           int:
         * @param $username     string:
         * @param $password     string:
         * @param $job          string: Either Job or Client
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
            $this->projects = $projects;
        }

        /**
         * @param $username     string:
         * @param $password     string:
         * @return $user        User: null if credentials are not found
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