<?php

class TestController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
         echo "Test Controller";
         
        // action body
    }
    
    public function testAction()
    {
        echo "Test action";
        // action body
    } 


}

