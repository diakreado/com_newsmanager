<?php
defined( '_JEXEC' ) or die; // No direct access

class NewsmanagerViewItem extends JViewLegacy {

	protected $item;

	public function display( $tpl = null ) 	{
		$this->item = $this->get('Item');


		parent::display( $tpl );
	}

}