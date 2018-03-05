<?php
/**
 *
 * Copyright © 2015 Detailcommerce. All rights reserved.
 */
namespace Detail\Form\Controller\FatchDetail;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Filesystem;
use Magento\Framework\View\Result\PageFactory;

class Update extends \Magento\Framework\App\Action\Action
{
    protected $_fileUploaderFactory;
    protected $_filesystem;
    
    public function __construct(
        \Magento\MediaStorage\Model\File\UploaderFactory $fileUploaderFactory,
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\Filesystem $filesystem
        )
    {
        $this->_fileUploaderFactory = $fileUploaderFactory;
        $this->_filesystem = $filesystem;

        parent::__construct($context);
    }

    
    public function execute()
    {

        $post = $this->getRequest()->getParams();
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $students = $objectManager->create('Detail\Form\Model\Form')->load($post['std_id']);
        $uploader = $this->_fileUploaderFactory->create(['fileId' => 'std_img']);
        $uploader->setAllowedExtensions(['jpg', 'jpeg', 'gif', 'png']);
        $uploader->setAllowRenameFiles(false);
        $uploader->setFilesDispersion(false);
        $path = $this->_filesystem->getDirectoryRead(\Magento\Framework\App\Filesystem\DirectoryList::MEDIA)
        ->getAbsolutePath('images/');
        if($uploader->save($path))
        {
            $students->setData('student_name',$post['std_name']);
            $students->setData('student_age',$post['std_age']);
            $students->setData('student_img',$_FILES['std_img']['name']);
            if($students->save())
            {
                $this->messageManager->addSuccess( __('Student Detail saved successfully.') );
                $this->_redirect('*/*/detail');
            }
        }

    }
}
