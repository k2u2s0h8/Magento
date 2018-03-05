<?php

class Custom_Whistling_Model_Mysql4_Whistling extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {    
        // Note that the whistling_id refers to the key field in your database table.
        $this->_init('whistling/whistling', 'whistling_id');
    }
}