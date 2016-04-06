<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
         echo "Index action";
        // action body
         $modelUser = new Application_Model_User;
         $Info = $modelUser->getUserInfo();         
         print_r($Info);
    }
    
    public function registrationAction()
    {
        
    } 


}

