<?php
/**
 *
 * Copyright © 2015 Detailcommerce. All rights reserved.
 */
namespace Detail\Form\Controller\FatchDetail;

class Delete extends \Magento\Framework\App\Action\Action
{

	
    public function execute()
    {
        $post = $this->getRequest()->getParams();
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $product = $objectManager->create('Detail\Form\Model\Form')->load($post['delete']);
        $product->delete();
        $this->_redirect('*/*/detail');
    }
}
