<?php
class Ksv_Social_Model_Source_Positionvertical {

    public function toOptionArray() {
        return array(
            array('value' => 'Middle', 'label' => Mage::helper('core')->__('Middle')),
            array('value' => 'Fixed', 'label' => Mage::helper('core')->__('Fixed')),
        );
    }
    
}
