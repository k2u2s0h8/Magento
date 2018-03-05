<?php
class Custom_Whistling_Block_Whistling extends Mage_Core_Block_Template
{
	public function _prepareLayout()
    {
		return parent::_prepareLayout();
    }
    
     public function getWhistling()     
     { 
        if (!$this->hasData('whistling')) {
            $this->setData('whistling', Mage::registry('whistling'));
        }
        return $this->getData('whistling');
        
    }
}