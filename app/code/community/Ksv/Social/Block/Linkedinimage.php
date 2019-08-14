<?php

class Ksv_Social_Block_Linkedinimage extends Mage_Adminhtml_Block_System_Config_Form_Fieldset {

    public function render(Varien_Data_Form_Element_Abstract $element) {


        $content.= '<tr id="row_seotools_general">
                    <td class="label"><label for="seotools_general_category_description_rewrite"></label></td>
                    <td class="value">
                    <img src="'.Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_SKIN).'frontend/base/default/ksv_social/system/linkedin.jpg" >
                    </td>
                    </tr>
        ';
        return $content;


    }


}
