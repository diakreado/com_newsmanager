<?php
defined( '_JEXEC' ) or die; // No direct access

class NewsmanagerViewNewsmanager extends JViewLegacy {

	protected $items;
	protected $pagination;

	public function display( $tpl = null ) 	{
		$this->items = $this->get('Items');
		$this->pagination = $this->get('Pagination');

		foreach ($this->items as $item) {
			$item->media = json_decode($item->media);
		}
		
		$this->setDocument();

		parent::display( $tpl );
	}

	protected function setDocument() {
		$document = JFactory::getDocument();
		$document->addStyleSheet(JUri::base().'components/com_newsmanager/assets/styles/newsmanager.css');
	}

}