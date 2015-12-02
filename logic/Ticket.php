<?php
/**
 * Created by PhpStorm.
 * User: sande
 * Date: 25/11/2015
 * Time: 15:31
 */

namespace PandaLogic;


class Ticket
{
	private $id;
	private $title;
	private $url;
	private $description;
	private $fixed;
	private $dateSent;
	private $sender;
	private $project;

	private $fillable = array('title', 'url', 'description', 'fixed', 'dateSent', 'sender', 'project');
	private $accessible = array('id', 'title', 'url', 'description', 'fixed', 'dateSent', 'sender', 'project');
	private $required = array('id');

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

	/**
	 * @param $id           int:
	 * @param $title        string:
	 * @param $url          string:
	 * @param $description  string:
	 * @param $fixed        bool:
	 * @param $dateSent     DateTime:
	 * @param $sender       Contact:
	 * @param $project      Project:
	 */
	public function __construct(Array $params = array()){
		if(count($params) > 0){
			foreach ($params as $key => $value) {
				$this->$key = $value;
			}

			foreach($this->required as $key){
				if(!isset($this->$key)){
					throw new \InvalidArgumentException('Invalid use of constructor: ' . $key . ' can\'t be empty\n');
				}
			}
		}
	}
}