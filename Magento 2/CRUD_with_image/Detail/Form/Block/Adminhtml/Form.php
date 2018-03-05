<?php
namespace Detail\Form\Block\Adminhtml;
class Form extends \Magento\Backend\Block\Widget\Grid\Container
{
    /**
     * Constructor
     *
     * @return void
     */
    protected function _construct()
    {
		
        $this->_controller = 'adminhtml_form';/*block grid.php directory*/
        $this->_blockGroup = 'Detail_Form';
        $this->_headerText = __('Form');
        $this->_addButtonLabel = __('Add New Entry'); 
        parent::_construct();
		
    }
}
