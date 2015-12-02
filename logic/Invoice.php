<?php
/**
 * Created by PhpStorm.
 * User: sande
 * Date: 24/11/2015
 * Time: 14:20
 */

namespace PandaLogic;


class Invoice
{
	private $id;
	private $title;
	private $description;
	private $price;
	private $dateSent;
	private $dateDue;
	private $paid;
	private $project;

	private $fillable = array('title', 'description', 'price', 'dateSent', 'dateDue', 'paid', 'project');
	private $accessible = array('id', 'title', 'description', 'price', 'dateSent', 'dateDue', 'paid', 'project');
	private $required = array('id', 'title', 'description', 'price', 'dateDue', 'paid', 'project');

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
	 * @param $id
	 * @param $title
	 * @param $description
	 * @param $price
	 * @param $dateSent
	 * @param $dateDue
	 * @param $paid
	 * @param $project
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

	/**
	 * Returns true if the invoice was sent successful, false otherwise.
	 *
	 * @param $url
	 * @return bool
	 */
	public function sendInvoice($url){
		return false;
	}
}