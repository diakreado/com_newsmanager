<?php
defined( '_JEXEC' ) or die; // No direct access

use Joomla\Registry\Registry;

class NewsmanagerModelItem extends JModelAdmin {

    public function getForm($data = array(), $loadData = true) {
        $form = $this->loadForm('com_newsmanager.item', 'item',
                                array('control'=>'jform',
                                      'load_data'=>$loadData));
        if (empty($form)) {
            return FALSE;
        }
        return $form;
    }

    public function getTable($type = 'Item', $prefix='NewsmanagerTable', $config=array()) {
        return JTable::getInstance($type, $prefix, $config);
    }

    protected function loadFormData() {
        $data = $this->getItem();
        return $data;
    }

    public function getItem($pl = null) {
        if($item = parent::getItem($pk)) {
            $registry = new Registry;
            $registry->loadString($item->media);
            $item->media = $registry->toArray();
            return $item;
        }
        return FALSE;
    }

    protected function prepareTable($table) {
			// print_r($table);
			// exit();
        if(isset($table->media) && is_array($table->media)) {
            $registry = new Registry;
            $registry->loadArray($table->media);
            $table->media = (string) $registry;
        }
    }
}
