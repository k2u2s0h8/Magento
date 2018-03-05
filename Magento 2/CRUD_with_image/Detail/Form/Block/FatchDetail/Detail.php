<?php
/**
 * Copyright © 2015 Detail . All rights reserved.
 */
namespace Detail\Form\Block\FatchDetail;
use Detail\Form\Block\BaseBlock;
class Detail extends BaseBlock
{
	
	public function createForm()     
    {
    	echo "
    	<html>
    		<head>
    			<title>
    				Student Form Detail
    			</title>
    		</head>
    		<body>
    			<form id='std_form' name='std_form' action='".$this->getFormSaveAction()."' enctype='multipart/form-data'  method='POST'>
    				Enter student name :
    				<input type='text' name='std_name' id='std_name' maxlength='15'/><br/>
    				Enter student age :
    				<input type='text' name='std_age' id='std_age' maxlength='2'/><br/>
                    Upload student image :
                    <input type='file' name='std_img' id='std_img' /><br/>
    				<input type='submit' name='Submit' value='Submit'/>
    			</form>
    		</body>
    	</html>
    	";
	}
    public function displayForm()
    {
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $product = $objectManager->create('Detail\Form\Model\Form')->getCollection();
        $media =$objectManager->get('Magento\Store\Model\StoreManagerInterface')
                                     ->getStore()
                                     ->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA);
        echo "<form action='".$this->getFormUpdateAction()."' enctype='multipart/form-data'  method='POST'>
            <table border='1' style='paddig-top:20px;'>
                <th>Roll No.</th>
                <th>Student Name</th>
                <th>Student Age</th>
                <th>Student Image</th>
                <th>Delete</th>
                <th>Update</th>";
        foreach ($product as $product_value)
        {
            echo "<tr>
                    <td>
                        <input type='text' name='std_id' id='std_id' value='".$product_value->getData('id')."' readonly/>
                    </td>
                    <td>
                        <input type='text' name='std_name' id='std_name' value='".$product_value->getData('student_name')."' maxlength='15'/>
                    </td>
                    <td>
                        <input type='text' name='std_age' id='std_age' value='".$product_value->getData('student_age')."' maxlength='2'/>
                    </td>
                    <td>
                        <img name='std_img' id='std_img' src='".$media.'images/'.$product_value->getData('student_img')."' height='100px' width='100px' /><br/>
                        <input type='file' name='std_img' id='std_img' />
                    </td>
                    <td>
                        <a href='".$this->getFormDeleteAction()."?delete=".$product_value->getData('id')."'>
                            <input type='button' value='Delete' name='Delete'/>
                        </a>
                    </td>
                    <td>
                        <a href=''>
                            <input type='submit' value='Update' name='Update'/>
                        </a>
                    </td>
                </tr>";

        }
        echo "</table>
        </form>";
    }
	public function getFormSaveAction()
    {
        return $this->getUrl('*/*/save');
    }
    public function getFormDeleteAction()
    {
        return $this->getUrl('*/*/delete');
    }
    public function getFormUpdateAction()
    {
        return $this->getUrl('*/*/Update');
    }
}
