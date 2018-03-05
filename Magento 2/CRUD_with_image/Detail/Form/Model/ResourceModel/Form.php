<?php
/**
 * Copyright © 2015 Detail. All rights reserved.
 */
namespace Detail\Form\Model\ResourceModel;

/**
 * Form resource
 */
class Form extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Initialize resource
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('form_form', 'id');
    }

  
}
