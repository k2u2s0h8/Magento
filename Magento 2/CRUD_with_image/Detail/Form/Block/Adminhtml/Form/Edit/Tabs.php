<?php
namespace Detail\Form\Block\Adminhtml\Form\Edit;

class Tabs extends \Magento\Backend\Block\Widget\Tabs
{
    protected function _construct()
    {
		
        parent::_construct();
        $this->setId('checkmodule_form_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(__('Form Information'));
    }
}