<?php
/**
 * Copyright © 2015 Custom . All rights reserved.
 */
namespace Custom\Objectmanager\Helper;
class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
	protected $objectManager;
	/**
     * @param \Magento\Framework\App\Helper\Context $context
     */
	public function __construct(\Magento\Framework\ObjectManagerInterface $objectmanager,
		\Magento\Framework\App\Helper\Context $context
	) {
		$this->objectManager = $objectmanager;
		parent::__construct($context);
	}

	public function objectManager()
	{
		return $this->objectManager;
	}
}