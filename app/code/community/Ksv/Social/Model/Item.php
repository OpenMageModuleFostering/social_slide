<?php
	class Ksv_Social_Model_Item extends Mage_Core_Model_Abstract
	{
		const CACHE_TAG     = 'ksvsocial_item';
		protected $_cacheTag= 'ksvsocial_item';

		protected function _construct()
		{
			$this->_init('social/item');


		}

	}
