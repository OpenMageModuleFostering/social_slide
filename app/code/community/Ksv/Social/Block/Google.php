<?php

class Ksv_Social_Block_Google extends Mage_Core_Block_Template {

    protected function _construct() {
        $this->addData(array(
            'cache_lifetime' => 86400,
            'cache_tags' => array("ksv_social_google_".Mage::app()->getStore()->getId()),
            'cache_key' => "ksv_social_google_".Mage::app()->getStore()->getId(),
        ));
    }
    
    public function getSettingsGoogle() {
        
        $model = Mage::getModel('social/item')->getCollection();
        $fblb_options['GP_Enable'] = Mage::getStoreConfig('social/google/enable');
        $fblb_options['GP_PageID'] = Mage::getStoreConfig('social/google/page_id');
        $fblb_options['GP_ShowFeed'] = Mage::getStoreConfig('social/google/show_feed');
        
        $fblb_options['GP_Width'] = Mage::getStoreConfig('social/google/width');
        $fblb_options['GP_Height'] = Mage::getStoreConfig('social/google/height');
        $fblb_options['GP_TabDesign'] = Mage::getStoreConfig('social/google/design');
        
        $fblb_options['GP_Position'] = Mage::getStoreConfig('social/google/position');
        $fblb_options['GP_TabPosition'] = Mage::getStoreConfig('social/google/position_button');
        $fblb_options['GP_TabPositionPx'] = Mage::getStoreConfig('social/google/position_button_fixed');
        $fblb_options['GP_VPosition'] = Mage::getStoreConfig('social/google/position_vertical');
        $fblb_options['GP_VPositionPx'] = Mage::getStoreConfig('social/google/position_vertical_fixed');
        
        $fblb_options['GP_Border'] = Mage::getStoreConfig('social/google/border_width');
        $fblb_options['GP_BorderColor'] = Mage::getStoreConfig('social/google/border_color');
        $fblb_options['GP_BackgroundColor'] = Mage::getStoreConfig('social/google/bg_color');

        $fblb_options['GP_ZIndex'] = Mage::getStoreConfig('social/google/z_index');
        $fblb_options['GP_Language'] = Mage::getStoreConfig('social/google/language');
        
        $fblb_options['GP_Data'] = $model;
        
        return $fblb_options;
    }        
        
        

}

