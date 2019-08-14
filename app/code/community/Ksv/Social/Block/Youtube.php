<?php

class Ksv_Social_Block_Youtube extends Mage_Core_Block_Template {

    protected function _construct() {
        $this->addData(array(
            'cache_lifetime' => 86400,
            'cache_tags' => array("ksv_social_youtube_".Mage::app()->getStore()->getId()),
            'cache_key' => "ksv_social_youtube_".Mage::app()->getStore()->getId(),
        ));
    }
        
    public function getSettingsYoutube() {
        
        $fblb_options['YT_Enable'] = Mage::getStoreConfig('social/youtube/enable');
        $fblb_options['YT_Channel'] = Mage::getStoreConfig('social/youtube/channel');
        $fblb_options['YT_Position'] = Mage::getStoreConfig('social/youtube/position');
        $fblb_options['YT_TabPosition'] = Mage::getStoreConfig('social/youtube/position_button');
        $fblb_options['YT_TabPositionPx'] = Mage::getStoreConfig('social/youtube/position_button_fixed');
        $fblb_options['YT_TabDesign'] = Mage::getStoreConfig('social/youtube/design');
        $fblb_options['YT_Width'] = Mage::getStoreConfig('social/youtube/width');
        $fblb_options['YT_Height'] = Mage::getStoreConfig('social/youtube/height');
        $fblb_options['YT_Border'] = Mage::getStoreConfig('social/youtube/border_width');
        $fblb_options['YT_BorderColor'] = Mage::getStoreConfig('social/youtube/border_color');
        $fblb_options['YT_BackgroundColor'] = Mage::getStoreConfig('social/youtube/bg_color');
        $fblb_options['YT_VPosition'] = Mage::getStoreConfig('social/youtube/position_vertical');
        $fblb_options['YT_VPositionPx'] = Mage::getStoreConfig('social/youtube/position_vertical_fixed');
        $fblb_options['YT_ZIndex'] = Mage::getStoreConfig('social/youtube/z_index');
        
        return $fblb_options;
    }        
        
        

}

