<?php
defined( '_JEXEC' ) or die;     // No direct access

class NewsmanagerModelItem extends JModelLegacy {

    protected $item;

    protected function populateState() {
        $input = JFactory::getApplication()->input;
        $id = $input->get('id', 1, 'INT');
        $this->setState('item.id', $id);
    }

    public function getItem() {
        $db = JFactory::getDbo();
        $query = $db->getQuery(TRUE);

        $id = $this->getState('item.id');

        $query->select('`id`, `title`, `alias`, `text`, `media`, `published_up`');
        $query->from('#__newsmanager');
        $query->where('`published` = 1 and id='.(int)$id);
        
        $db->setQuery($query);

        $this->item = $db->loadObject();

        if ($this->item) {
            $this->item->media = json_decode($this->item->media);
        }

        return $this->item;
    }
}