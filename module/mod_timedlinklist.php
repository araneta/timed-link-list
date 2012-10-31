<?php
/**
* @version		$Id: mod_timedlinklist.php 2012-09-3  Aldo S. Praherda
* @package		Joomla
* @copyright	Copyright (c) 2012
* @license		GNU/GPL, see LICENSE.php
* 
*/
// no direct access
defined('_JEXEC') or die;

// Include the whosonline functions only once
require_once dirname(__FILE__).'/helper.php';

$maxlinktoshow = intval($params->get('maxlinktoshow', 0));
$maxchartoshow = intval($params->get('maxchartoshow', 0));
$orderby = intval($params->get('order', 0));
$order_type = $params->get('order_type', 'asc');
$maxitem = intval($params->get('maxitem',0));
$bottomtext = $params->get('bottomtext','');
$rows = modTimedLinkListHelper::getLinks($maxitem,$orderby,$order_type);
require JModuleHelper::getLayoutPath('mod_timedlinklist', $params->get('layout', 'default'));
?>
