<?php
class Custom_Whistling_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
    	
    	/*
    	 * Load an object by id 
    	 * Request looking like:
    	 * http://site.com/whistling?id=15 
    	 *  or
    	 * http://site.com/whistling/id/15 	
    	 */
    	/* 
		$whistling_id = $this->getRequest()->getParam('id');

  		if($whistling_id != null && $whistling_id != '')	{
			$whistling = Mage::getModel('whistling/whistling')->load($whistling_id)->getData();
		} else {
			$whistling = null;
		}	
		*/
		
		 /*
    	 * If no param we load a the last created item
    	 */ 
    	/*
    	if($whistling == null) {
			$resource = Mage::getSingleton('core/resource');
			$read= $resource->getConnection('core_read');
			$whistlingTable = $resource->getTableName('whistling');
			
			$select = $read->select()
			   ->from($whistlingTable,array('whistling_id','title','content','status'))
			   ->where('status',1)
			   ->order('created_time DESC') ;
			   
			$whistling = $read->fetchRow($select);
		}
		Mage::register('whistling', $whistling);
		*/

			
		$this->loadLayout();     
		$this->renderLayout();
    }
}