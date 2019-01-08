<?php

// No direct access
defined( '_JEXEC' ) or die;

class NewsmanagerTableItem extends JTable {

	function __construct( &$db ) {
		parent::__construct( '#__newsmanager', 'id', $db );
	}
}