<?php

class Application_Model_User
{

    private $dbAdapter;
    private $session;

    public function __construct() {
        $this->dbAdapter = Zend_Registry::get('db');
        $this->session = new Zend_Session_Namespace('user');
    }

    /**
     * Function getUserInfo
     * @var void
     * @return array
     */
    public function getUserInfo() {
        $arr = array("Girish Patidar","9907081777","123 Main Street, Indore MP");
        return $arr;        
    }
}

