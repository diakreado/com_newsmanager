<?php
defined( '_JEXEC' ) or die; // No direct access

class NewsmanagerViewNewsmanager extends JViewLegacy
{
	protected $items;
	protected $pagination;

	/**
	 * Method of display current template
	 * @param type $tpl
	 */
	public function display( $tpl = null )
	{

		$this->items = $this->get('Items');
		$this->pagination = $this->get('Pagination');

		$this->addToolBar();

		parent::display( $tpl );

		$this->setDocument();
	}

	protected function addToolBar() {
		JToolBarHelper::title(JText::_('COM_NEWSMANAGER_MANAGER'));
		JToolBarHelper::addNew('item.add');
		JToolBarHelper::editList('item.edit');
		JToolBarHelper::deleteList('','newsmanager.delete');
	}

	protected function setDocument() {
		$document = JFactory::getDocument();
		$document->setTitle(JText::_('COM_NEWSMANAGER_MANAGER_ADMIN'));
	}
}