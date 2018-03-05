<?php

class Custom_Whistling_Model_Whistling extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('whistling/whistling');
    }
}