<?php

class Petryk_Newproducts_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->listAction();
    }

    public function listAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }
}
