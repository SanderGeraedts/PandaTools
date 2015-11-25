<?php
/**
 * Created by PhpStorm.
 * User: sande
 * Date: 25/11/2015
 * Time: 15:31
 */

namespace PandaLogic;


class Ticket
{
    private $id;
    private $title;
    private $url;
    private $description;
    private $fixed;
    private $dateSent;
    private $sender;
    private $project;

    public function getId(){ return $this->id; }
    public function getTitle(){ return $this->title; }
    public function getUrl(){ return $this->url; }
    public function getDescription(){ return $this->description; }
    public function getFixed(){ return $this->fixed; }
    public function getDateSent(){ return $this->dateSent; }
    public function getSender(){ return $this->sender; }
    public function getProject(){ return $this->project; }

    public function setTitle($value){ $this->title = $value; }
    public function setUrl($value){ $this->url = $value; }
    public function setDescription($value){ $this->description = $value; }
    public function setFixed($value){ $this->fixed = $value; }
    public function setDateSent($value){ $this->dateSent = $value; }
    public function setSender($value){ $this->sender = $value; }
    public function setProject($value){ $this->project = $value; }

    /**
     * @param $id           int:
     * @param $title        string:
     * @param $url          string:
     * @param $description  string:
     * @param $fixed        bool:
     * @param $dateSent     DateTime:
     * @param $sender       Contact:
     * @param $project      Project:
     */
    public function __construct($id, $title, $url, $description, $fixed, $dateSent, $sender, $project){
        $this->id = $id;
        $this->title = $title;
        $this->url = $url;
        $this->description = $description;
        $this->fixed = $fixed;
        $this->dateSent = $dateSent;
        $this->sender = $sender;
        $this->project = $project;
    }
}