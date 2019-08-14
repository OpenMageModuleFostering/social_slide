<?php

class Ksv_Social_Block_Linkedin extends Mage_Core_Block_Template {

    protected function _construct() {
        $this->addData(array(
            'cache_lifetime' => 86400,
            'cache_tags' => array("ksv_social_linkedin_".Mage::app()->getStore()->getId()),
            'cache_key' => "ksv_social_linkedin_".Mage::app()->getStore()->getId(),
        ));
    }
        
    public function getSettingsLinkedin() {
        
        $fblb_options['LI_Enable'] = Mage::getStoreConfig('social/linkedin/enable');
        $fblb_options['LI_ShowPublicProfile'] = Mage::getStoreConfig('social/linkedin/show_member');
        $fblb_options['LI_ShowCompanyProfile'] = Mage::getStoreConfig('social/linkedin/show_company');
        $fblb_options['LI_PublicProfile'] = Mage::getStoreConfig('social/linkedin/show_member_url');
        $fblb_options['LI_CompanyID'] = Mage::getStoreConfig('social/linkedin/show_company_id');
        $fblb_options['LI_Order'] = Mage::getStoreConfig('social/linkedin/order');
        $fblb_options['LI_Position'] = Mage::getStoreConfig('social/linkedin/position');
        $fblb_options['LI_TabPosition'] = Mage::getStoreConfig('social/linkedin/position_button');
        $fblb_options['LI_TabPositionPx'] = Mage::getStoreConfig('social/linkedin/position_button_fixed');
        $fblb_options['LI_TabDesign'] = Mage::getStoreConfig('social/linkedin/design');
        $fblb_options['LI_Width'] = Mage::getStoreConfig('social/linkedin/width');
        $fblb_options['LI_Height'] = Mage::getStoreConfig('social/linkedin/height');
        $fblb_options['LI_Border'] = Mage::getStoreConfig('social/linkedin/border_width');
        $fblb_options['LI_BorderColor'] = Mage::getStoreConfig('social/linkedin/border_color');
        $fblb_options['LI_BackgroundColor'] = Mage::getStoreConfig('social/linkedin/bg_color');
        $fblb_options['LI_VPosition'] = Mage::getStoreConfig('social/linkedin/position_vertical');
        $fblb_options['LI_VPositionPx'] = Mage::getStoreConfig('social/linkedin/position_vertical_fixed');
        $fblb_options['LI_ZIndex'] = Mage::getStoreConfig('social/linkedin/z_index');
        
        return $fblb_options;
    }        
        
        

}

