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

    public function getId(){ return $this->id; }
    public function getDescription(){ return $this->description; }
    public function getTimeSent(){ return $this->timeSent; }

    public function setDescription($value){ $this->description = $value; }
    public function setTimeSent($value){ $this->timeSent = $value; }

    /**
     * @param $id           int:
     * @param $description  string:
     * @param $timeSent     DateTime:
     */
    public function __construct($id, $description, $timeSent){
        $this->id = $id;
        $this->description = $description;
        $this->timeSent = $timeSent;
    }
}