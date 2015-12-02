<?php
/**
 * Created by PhpStorm.
 * User: Sander Geraedts
 * Date: 25/11/2015
 * Time: 15:30
 */

namespace PandaLogic;


class Feedback
{
	private $id;
	private $description;
	private $timeSent;

    private $fillable = array('description');
    private $accessible = array('id', 'description', 'timeSent');
    private $required = array('id', 'timeSent');

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
	 * @param $description  string:
	 * @param $timeSent     DateTime:
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
}