<?php
/**
 * Created by PhpStorm.
 * User: Sander Geraedts
 * Date: 25/11/2015
 * Time: 15:10
 */

namespace PandaLogic;


class Planning
{
    private $id;
    private $startTime;
    private $endTime;

    public function getId(){ return $this->id; }
    public function getStartTime(){ return $this->startTime; }
    public function getEndTime(){ return $this->endTime; }

    public function setStartTime($value){ $this->startTime = $value; }
    public function setEndTime($value){ $this->endTime = $value; }

    /**
     * @param $id           int:
     * @param $startTime    dateTime:
     * @param $endTime      dateTime:
     */
    public function __construct($id, $startTime, $endTime){
        $this->id = $id;
        $this->startTime = $startTime;
        $this->endTime = $endTime;
    }
}