<?php

class Petryk_Newproducts_Model_Observer
{
    public function addLinkToTopmenu(Varien_Event_Observer $observer)
    {
        $menu = $observer->getMenu();
        $tree = $menu->getTree();

        $linkNode = new Varien_Data_Tree_Node(array(
            'name' => 'New Products',
            'id' => 'petryk_newproducts',
            'url' => Mage::getUrl('petryk_newproducts/index/list')
        ), 'id', $tree, $menu);

        $menu->addChild($linkNode);
    }
}
