<?php
/**
 * Created by PhpStorm.
 * User: Sander Geraedts
 * Date: 25/11/2015
 * Time: 11:00
 */

namespace PandaLogic;


class Sprint
{
    private $id;
    private $title;
    private $order;
    private $timeSpent;
    private $timeAllocated;
    private $description;
    private $deliverables;

    public function getId(){ return $this->id; }
    public function getTitle(){ return $this->title; }
    public function getOrder(){ return $this->order; }
    public function getTimeSpent(){ return $this->timeSpent; }
    public function getTimeAllocated(){ return $this->timeAllocated; }
    public function getDescription(){ return $this->description; }
    public function getDeliverables(){ return $this->deliverables; }

    public function setTitle($value){ $this->title = $value; }
    public function setOrder($value){ $this->order = $value; }
    public function setTimeSpent($value){ $this->timeSpent = $value; }
    public function setTimeAllocated($value){ $this->timeAllocated = $value; }
    public function setDescription($value){ $this->description = $value; }

    public function addDeliverable($value){ array_push($this->deliverables, $value); }

    public function removeDeliverable($value){
        $key = array_search($value, $this->deliverables);
        if($key != false){
            unset($this->deliverables[$key]);
            return true;
        }
        else{
            return false;
        }
    }

    /**
     * @param $id
     * @param $title
     * @param $order
     * @param $timeSpent
     * @param $timeAllocated
     * @param $description
     * @param $deliverables
     */
    public function __construct($id, $title, $order, $timeSpent, $timeAllocated, $description, $deliverables){
        $this->id = $id;
        $this->title = $title;
        $this->order = $order;
        $this->timeSpent = $timeSpent;
        $this->timeAllocated = $timeAllocated;
        $this->description = $description;

        if(isset($deliverables)) {
            $this->deliverables = $deliverables;
        }
        else{
            $this->deliverables = array();
        }
    }
}