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
    private $description;
    private $contacts;
    private $sprints;
    private $planning;
    private $invoices;

    public function getId(){ return $this->id; }
    public function getDescription(){ return $this->description; }
    public function getContacts(){ return $this->contacts; }
    public function getSprints(){ return $this->sprints; }
    public function getPlanning(){ return $this->planning; }
    public function getInvoices(){ return $this->invoices; }

    public function setDescription($value){ $this->description = $value;}

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
    public function __construct($id, $description, $contacts, $sprints, $planning, $invoices){
        $this->id = $id;
        $this->description = $description;
        $this->contacts = $contacts;
        $this->sprints = $sprints;
        $this->planning = $planning;
        $this->invoices = $invoices;
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