<?php
defined( '_JEXEC' ) or die; // No direct access


$controller = JControllerLegacy::getInstance( 'newsmanager' );
$controller->execute( JFactory::getApplication()->input->get( 'task' ) );
$controller->redirect();