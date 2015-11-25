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

    public function getId(){ return $this->id; }
    public function getTitle(){ return $this->title; }
    public function getDescription(){ return $this->description; }
    public function getPrice(){ return $this->price; }
    public function getDateSent(){ return $this->dateSent; }
    public function getDateDue(){ return $this->dateDue; }
    public function getPaid(){ return $this->paid; }
    public function getProject(){ return $this->project; }

    public function setTitle($value){ $this->title = $value; }
    public function setDescription($value){ $this->description = $value; }
    public function setPrice($value){ $this->price = $value; }
    public function setDateSent($value){ $this->dateSent = $value; }
    public function setDateDue($value){ $this->dateDue = $value; }
    public function setPaid($value){ $this->paid = $value; }
    public function setProject($value){ $this->project = $value; }

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
    public function __construct($id, $title, $description, $price, $dateSent, $dateDue, $paid, $project){
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
        $this->dateSent = $dateSent;
        $this->dateDue = $dateDue;
        $this->paid = $paid;
        $this->project = $project;
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