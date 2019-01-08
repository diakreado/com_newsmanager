<?php
defined( '_JEXEC' ) or die; // No direct access


class NewsmanagerModelNewsmanager extends JModelList {
    
    protected function getListQuery() {
        $db = JFactory::getDbo();
        $query = $db->getQuery(TRUE);

        $query->select('`id`, `title`, `alias`, `text`, `media`, `published_up`');
        $query->from('#__newsmanager');
        $query->where('`published` = 1');
        $query->oder('`published_up` DESC');

        return $query;
    }

}