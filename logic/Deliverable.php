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

    private $fillable = array('timeSent', 'timeFeedback', 'accepted', 'url', 'feedback');
    private $accessible = array('id', 'timeSent', 'timeFeedback', 'accepted', 'url', 'feedback');
    private $required = array('id');

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

    /**
     * @param $id           int:
     * @param $timeSent     DateTime:
     * @param $timeFeedback DateTime:
     * @param $accepted     Boolean:
     * @param $url          string:
     * @param $feedback     string:
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