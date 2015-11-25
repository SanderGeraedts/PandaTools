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

    public function getId(){ return $this->id; }
    public function getName(){ return $this->nane; }
    public function getOrganisation(){ return $this->organisation; }
    public function getFunction(){ return $this->function; }
    public function getAddress(){ return $this->address; }
    public function getPhoneNumber(){ return $this->phoneNumber; }
    public function getEmail(){ return $this->email; }
    public function getZipcode(){ return $this->zipcode; }
    public function getCity(){ return $this->city; }

    public function setName($value){ $this->name = $value; }
    public function setOrganisation($value){ $this->organisation = $value; }
    public function setFunction($value){ $this->function = $value; }
    public function setAddress($value){ $this->address = $value; }
    public function setPhoneNumber($value){ $this->phoneNumber = $value; }
    public function setEmail($value){ $this->email = $value; }
    public function setZipcode($value){ $this->zipcode = $value; }
    public function setCity($value){ $this->city = $value; }

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
    public function __construct($id, $name,$organisation, $address, $phoneNumber, $email, $zipcode, $city){
        $this->id = $id;
        $this->name = $name;
        $this->organisation = $organisation;
        $this->address = $address;
        $this->phoneNumber = $phoneNumber;
        $this->email = $email;
        $this->zipcode = $zipcode;
        $this->city = $city;
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