<?php
namespace Detail\Form\Observer;
use Magento\Framework\Event\ObserverInterface;

class changeDisplayText implements ObserverInterface
{
  public function execute(\Magento\Framework\Event\Observer $observer)
  {
  	$objectManager = \Magento\Framework\App\ObjectManager::getInstance();
    $groupOptions = $objectManager->get('\Magento\Customer\Model\ResourceModel\Group\Collection')->toOptionArray();
    $discountName = array();
    foreach ($groupOptions as $groupList) 
    {
      $discountValue = array('value'=>$groupList["label"],'label'=> $groupList["label"]);
      array_push($discountName,$discountValue);
    }
  }
}