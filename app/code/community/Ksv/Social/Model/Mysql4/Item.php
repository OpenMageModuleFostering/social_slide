<?php

class Ksv_Social_Model_Mysql4_Item extends Mage_Core_Model_Mysql4_Abstract {

    protected function _construct() {
        $this->_init('social/item', 'item_id');
    }

    protected function _beforeSave(Mage_Core_Model_Abstract $object) {
        $select = $this->_getReadAdapter()->select()
                        ->from($this->getTable('social/item'))
                        ->where('key_id = ?', $object->getData('key_id'));
        $data = $this->_getReadAdapter()->fetchAll($select);
        if ($data) {
            $condition = $this->_getWriteAdapter()->quoteInto('key_id = ?', $object->getData('key_id'));
            $this->_getWriteAdapter()->delete($this->getTable('social/item'), $condition);
        }

    }

}
