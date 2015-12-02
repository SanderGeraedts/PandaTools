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
		private $projects = array();

		private $fillable = array('username', 'password', 'job', 'contact');
		private $accessible = array('id', 'username', 'password', 'job', 'contact', 'projects');
		private $required = array('id', 'username', 'password');

		public function __set ($name, $value) {
			if (in_array($name, $this->fillable)) {
				if (isset($this->$name)) {
					$this->$name = $value;
				}
			}

			return null;
		}
		public function __get ($name) {

			// Do not return if not accessible
			if (in_array($name, $this->accessible)) {
				if (isset($this->$name)) {
					return $this->$name;
				}
			}

			return null;
		}

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
		public function __construct(Array $params = array()){
			if(count($params) > 0){
				foreach ($params as $key => $value) {
					$this->$key = $value;
				}

				foreach($this->required as $key){
					if(!isset($this->$key)){
						throw new \InvalidArgumentException('Invalid use of constructor:\n' . $key . ' can\'t be empty');
					}
				}
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