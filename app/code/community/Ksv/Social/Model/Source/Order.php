<?php
class Ksv_Social_Model_Source_Order {

    public function toOptionArray() {
        return array(
            array('value' => '1', 'label' => Mage::helper('core')->__('1. Member Public Profile 2. Company Profile ')),
            array('value' => '2', 'label' => Mage::helper('core')->__('1. Company Profile 2. Member Public Profile ')),
        );
    }
    
}
