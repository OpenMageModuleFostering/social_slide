<?php
class Ksv_Social_Model_Source_Colorscheme {

    public function toOptionArray() {
        return array(
            array('value' => 'light', 'label' => Mage::helper('core')->__('light')),
            array('value' => 'dark', 'label' => Mage::helper('core')->__('dark')),
        );
    }
    
}
