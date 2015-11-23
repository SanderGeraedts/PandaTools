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

    /**
     * @param $id           int:
     * @param $description  string:
     * @param $contacts     Array<Contact>:     An array with the contacts involved in the project
     * @param $sprints      Array<Sprint>:      An array with all the Sprints
     * @param $planning     Array<Planning>:    An array with the availability
     */
    public function __construct($id, $description, $contacts, $sprints, $planning){
        $this->id = $id;
        $this->description = $description;
        $this->contacts = $contacts;
        $this->sprints = $sprints;
        $this->planning = $planning;
    }

    /**
     * @param $url          string:             The url containing the mail that needs to be sent
     */
    public function MailProject($url){
        foreach($this->contacts as $contact){
            $contact->SendEmail($url);
        }
    }
}