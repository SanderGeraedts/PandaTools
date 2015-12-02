<?php
/**
 * Created by PhpStorm.
 * User: sande
 * Date: 23/11/2015
 * Time: 21:06
 */

namespace PandaLogic;


class Contact
{
    private $id;
    private $name;
    private $organisation;
    private $function;
    private $address;
    private $phoneNumber;
    private $email;
    private $zipcode;
    private $city;

    private $fillable = array('name', 'organisation', 'function', 'address', 'phoneNumber', 'email', 'zipcode');
    private $accessible = array('id', 'name', 'organisation', 'function', 'address', 'phoneNumber', 'email', 'zipcode');
    private $required = array('id', 'name');

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
     * @param $name         string:
     * @param $organisation string:
     * @param $address      string:
     * @param $phoneNumber  string:
     * @param $email        string:
     * @param $zipcode      string:
     * @param $city         string:
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
     * Sends a HTML mail to this contact.
     *
     * @param $url          string: the place where the HTML mail is stored.
     * @return bool         returns true if the mail was sent successful, false otherwise.
     */
    public function mailContact($url){
        if(isset($this->email)){
            return true;
        }
        return false;
    }
}