<?php
/**
 * Created by PhpStorm.
 * User: Sander Geraedts
 * Date: 23/11/2015
 * Time: 20:02
 */

namespace PandaLogic;


class Project
{
    private $id;
    private $name;
    private $description;
    private $contacts = array();
    private $sprints = array();
    private $planning = array();
    private $invoices = array();

    private $fillable = array('name', 'description', 'contacts', 'sprints', 'planning', 'invoices');
    private $accessible = array('id', 'name', 'description', 'contacts', 'sprints', 'planning', 'invoices');
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

    public function addContact($value){ array_push($this->contacts, $value); }
    public function addSprint($value){ array_push($this->sprints, $value); }
    public function addPlanning($value){ array_push($this->planning, $value); }
    public function addInvoice($value){ array_push($this->invoices, $value); }

    public function removeContact($value){
        $key = array_search($value, $this->contacts);
        if($key != false){
            unset($this->contacts[$key]);
            return true;
        }
        else{
            return false;
        }
    }

    public function removeSprint($value){
        $key = array_search($value, $this->sprints);
        if($key != false){
            unset($this->sprints[$key]);
            return true;
        }
        else{
            return false;
        }
    }

    public function removePlanning($value){
        $key = array_search($value, $this->planning);
        if($key != false){
            unset($this->planning[$key]);
            return true;
        }
        else{
            return false;
        }
    }

    public function removeInvoice($value){
        $key = array_search($value, $this->invoices);
        if($key != false){
            unset($this->invoices[$key]);
            return true;
        }
        else{
            return false;
        }
    }

    /**
     * @param $id           int:
     * @param $description  string:
     * @param $contacts     Array<Contact>:     An array with the contacts involved in the project
     * @param $sprints      Array<Sprint>:      An array with all the Sprints
     * @param $planning     Array<Planning>:    An array with the availability
     * @param $invoices     Array<Invoice>:
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
     * Sends a predefined HTML email to everybody in this project
     *
     * @param $url          string:             The url containing the mail that needs to be sent
     * @return $error       Array<Contact>:     Returns all contacts where an error occurred during mailing. Returns empty array if everything went successful.
     */
    public function mailProject($url){
        $error = Array();

        foreach($this->contacts as $contact){
            if($contact->mailContact($url) == false){
               array_push($error, $contact);
            }
        }

        return $error;
    }
}