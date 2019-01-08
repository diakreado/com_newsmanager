<?php
defined( '_JEXEC' ) or die; // No direct access

use Joomla\Registry\Registry;

class NewsmanagerModelNewsmanager extends JModelList {

    protected function getListQuery() {
        $db = JFactory::getDbo();
        $query = $db->getQuery(TRUE);

        $query->select('`id`, `title`, `alias`, `published`');
        
        $query->from('#__newsmanager');

        return $query;
    }

}
	