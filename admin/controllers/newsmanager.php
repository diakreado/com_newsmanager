<?php
// No direct access
defined( '_JEXEC' ) or die;

class NewsmanagerControllerNewsmanager extends JControllerAdmin {
    
    public function getModel($name = 'Item', $prefix='NewsmanagerModel', $config=array()) {
        return parent::getModel($name, $prefix, $config);
    }
}