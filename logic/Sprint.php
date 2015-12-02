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
    private $deliverables = array();

    private $fillable = array('title', 'order', 'timeSpent', 'timeAllowed', 'description');
    private $accessible = array('id', 'title', 'order', 'timeSpent', 'timeAllowed', 'description', 'deliverables');
    private $required = array('id', 'title', 'description');

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