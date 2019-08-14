<?php
class Ksv_Social_Model_Source_Positionbutton {

    public function toOptionArray() {
        return array(
            array('value' => 'Top', 'label' => Mage::helper('core')->__('Top')),
            array('value' => 'Middle', 'label' => Mage::helper('core')->__('Middle')),
            array('value' => 'Bottom', 'label' => Mage::helper('core')->__('Bottom')),
            array('value' => 'Fixed', 'label' => Mage::helper('core')->__('Fixed')),
        );
    }
    
}
