<?php
/**
 * Created by PhpStorm.
 * User: Sander Geraedts
 * Date: 25/11/2015
 * Time: 15:10
 */

namespace PandaLogic;


class Planning
{
	private $id;
	private $startTime;
	private $endTime;

	private $fillable = array('startTime', 'endTime');
	private $accessible = array('id', 'startTime', 'endTime');
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
	 * @param $startTime    dateTime:
	 * @param $endTime      dateTime:
	 */
	public function __construct(Array $params = array()){
		if(count($params) > 0){
			foreach ($params as $key => $value){
				$this->$key = $value;
			}

			foreach($this->required as $key){
				if(!isset($this->$key)){
					throw new \InvalidArgumentException('Invalid use of constructor:\n' . $key . ' can\'t be empty');
				}
			}
		}
	}
}