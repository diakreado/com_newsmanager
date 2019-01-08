<?php
defined( '_JEXEC' ) or die; // No direct access

class NewsmanagerViewItem extends JViewLegacy {
	protected $form;
	
	/**
	 * Method of display current template
	 * @param type $tpl
	 */
	public function display( $tpl = null )
	{
		
		$this->form = $this->get('Form');
		$this->item = $this->get('Item');

		$this->addToolBar();

		parent::display( $tpl );

		$this->setDocument();
	}

	protected function addToolBar() {
		JToolBarHelper::title(JText::_('COM_NEWSMANAGER_ITEM'));
		JToolBarHelper::save('item.save');
		JToolBarHelper::cancel('item.cancel');
	}

	protected function setDocument() {
		$document = JFactory::getDocument();
		$document->setTitle(JText::_('COM_NEWSMANAGER_MANAGER_ADMIN'));
	}
}