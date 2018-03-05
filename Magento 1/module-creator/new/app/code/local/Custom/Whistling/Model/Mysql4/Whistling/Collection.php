<?php

class Custom_Whistling_Model_Mysql4_Whistling_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('whistling/whistling');
    }
}