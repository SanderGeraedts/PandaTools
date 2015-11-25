<?php
/**
 * Created by PhpStorm.
 * User: Sander Geraedts
 * Date: 25/11/2015
 * Time: 15:30
 */

namespace PandaLogic;


class Deliverable
{
    private $id;
    private $timeSent;
    private $timeFeedback;
    private $accepted;
    private $url;
    private $feedback;

    public function getId(){ return $this->id; }
    public function getTimeSent(){ return $this->timeSent; }
    public function getTimeFeedback(){ return $this->timeFeedback; }
    public function getAccepted(){ return $this->accepted; }
    public function getUrl(){ return $this->url; }
    public function getFeedback(){ return $this->feedback; }

    public function setTimeSent($value){ $this->timeSent = $value; }
    public function setTimeFeedback($value){ $this->timeFeedback = $value; }
    public function setAccepted($value){ $this->accepted = $value; }
    public function setUrl($value){ $this->url = $value; }
    public function setFeedback($value){ $this->feedback = $value; }

    /**
     * @param $id           int:
     * @param $timeSent     DateTime:
     * @param $timeFeedback DateTime:
     * @param $accepted     Boolean:
     * @param $url          string:
     * @param $feedback     string:
     */
    public function __construct($id, $timeSent, $timeFeedback, $accepted, $url, $feedback){
        $this->id = $id;
        $this->timeSent = $timeSent;
        $this->timeFeedback = $timeFeedback;
        $this->accepted = $accepted;
        $this->url = $url;
        $this->feedback = $feedback;
    }
}