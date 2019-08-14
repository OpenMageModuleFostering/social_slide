<?php

class Ksv_Social_Block_Twitter extends Mage_Core_Block_Template {

    protected function _construct() {
        $this->addData(array(
            'cache_lifetime' => 86400,
            'cache_tags' => array("ksv_social_twitter_".Mage::app()->getStore()->getId()),
            'cache_key' => "ksv_social_twitter_".Mage::app()->getStore()->getId(),
        ));
    }
        
    public function getSettingsTwitter() {
        
        $fblb_options['TW_Enable'] = Mage::getStoreConfig('social/twitter/enable');
        $fblb_options['TW_Username'] = Mage::getStoreConfig('social/twitter/username');
        $fblb_options['TW_Width'] = Mage::getStoreConfig('social/twitter/width');
        $fblb_options['TW_Height'] = Mage::getStoreConfig('social/twitter/height');
        $fblb_options['TW_ShowFollowButton'] = Mage::getStoreConfig('social/twitter/show_follow_button');
        $fblb_options['TW_Position'] = Mage::getStoreConfig('social/twitter/position');
        $fblb_options['TW_TabPosition'] = Mage::getStoreConfig('social/twitter/position_button');
        $fblb_options['TW_TabPositionPx'] = Mage::getStoreConfig('social/twitter/position_button_fixed');
        $fblb_options['TW_TabDesign'] = Mage::getStoreConfig('social/twitter/design');
        $fblb_options['TW_Border'] = Mage::getStoreConfig('social/twitter/border_width');
        $fblb_options['TW_BorderColor'] = Mage::getStoreConfig('social/twitter/border_color');
        $fblb_options['TW_ShellBackground'] = Mage::getStoreConfig('social/twitter/shell_color');
        $fblb_options['TW_ShellText'] = Mage::getStoreConfig('social/twitter/shell_text');
        $fblb_options['TW_TweetBackground'] = Mage::getStoreConfig('social/twitter/tweet_background');
        $fblb_options['TW_TweetText'] = Mage::getStoreConfig('social/twitter/tweet_text');
        $fblb_options['TW_Links'] = Mage::getStoreConfig('social/twitter/links');
        $fblb_options['TW_VPosition'] = Mage::getStoreConfig('social/twitter/position_vertical');
        $fblb_options['TW_VPositionPx'] = Mage::getStoreConfig('social/twitter/position_vertical_fixed');
        $fblb_options['TW_ZIndex'] = Mage::getStoreConfig('social/twitter/z_index');
        $fblb_options['TW_live'] = '';
        $fblb_options['TW_behavior'] = 'all';
        $fblb_options['TW_loop'] = '';
        $fblb_options['TW_interval'] = '30';
        $fblb_options['TW_rpp'] = Mage::getStoreConfig('social/twitter/tweet_number');
        $fblb_options['TW_Language'] = Mage::getStoreConfig('social/twitter/language');
        
        return $fblb_options;
    }        
        
        

}

