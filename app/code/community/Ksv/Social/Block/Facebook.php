<?php

class Ksv_Social_Block_Facebook extends Mage_Core_Block_Template {

    protected function _construct() {
        $this->addData(array(
            'cache_lifetime' => 86400,
            'cache_tags' => array("ksv_social_facebook_".Mage::app()->getStore()->getId()),
            'cache_key' => "ksv_social_facebook_".Mage::app()->getStore()->getId(),
        ));
    }
    
    public function getSettingsFacebook() {
        
        $fblb_options['Enable'] = Mage::getStoreConfig('social/facebook/enable');
        $fblb_options['FacebookPageURL'] = Mage::getStoreConfig('social/facebook/url');
        $fblb_options['Width'] = Mage::getStoreConfig('social/facebook/width');
        $fblb_options['Height'] = Mage::getStoreConfig('social/facebook/height');
        $fblb_options['ShowFaces'] = Mage::getStoreConfig('social/facebook/show_faces');
        $fblb_options['ShowStream'] = Mage::getStoreConfig('social/facebook/show_stream');
        $fblb_options['ForceWall'] = Mage::getStoreConfig('social/facebook/force_wall');
        $fblb_options['ShowHeader'] = Mage::getStoreConfig('social/facebook/show_header');
        $fblb_options['Position'] = Mage::getStoreConfig('social/facebook/position');
        $fblb_options['TabPosition'] = Mage::getStoreConfig('social/facebook/position_button');
        $fblb_options['TabPositionPx'] = Mage::getStoreConfig('social/facebook/position_button_fixed');
        $fblb_options['TabDesign'] = Mage::getStoreConfig('social/facebook/design');
        $fblb_options['Border'] = Mage::getStoreConfig('social/facebook/border_width');
        $fblb_options['BorderColor'] = Mage::getStoreConfig('social/facebook/border_color');
        $fblb_options['BackgroundColor'] = Mage::getStoreConfig('social/facebook/bg_color');
        $fblb_options['Locale'] = Mage::getStoreConfig('social/facebook/locale');
        $fblb_options['ColorScheme'] = Mage::getStoreConfig('social/facebook/color_scheme');
        $fblb_options['VPosition'] = Mage::getStoreConfig('social/facebook/position_vertical');
        $fblb_options['VPositionPx'] = Mage::getStoreConfig('social/facebook/position_vertical_fixed');
        $fblb_options['ZIndex'] = Mage::getStoreConfig('social/facebook/z_index');
        
        return $fblb_options;
    }        
        
        

}

