<?php
class Ksv_Social_Model_Source_Position {

    public function toOptionArray() {
        return array(
            array('value' => 'Left', 'label' => Mage::helper('core')->__('Left')),
            array('value' => 'Right', 'label' => Mage::helper('core')->__('Right')),
        );
    }
    
}
