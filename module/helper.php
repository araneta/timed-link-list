<?php
/**
* @version		$Id: mod_timedlinklist.php 2012-09-3  Aldo S. Praherda
* @package		Joomla
* @copyright	Copyright (c) 2012
* @license		GNU/GPL, see LICENSE.php
* 
*/

/** ensure this file is being included by a parent file */
defined('_JEXEC') or die('Direct Access to this location is not allowed.');

class modTimedLinkListHelper
{
	function getLinks($maxitem,$order,$order_type){
		switch($order) {
			case 0:
				$orderby = "a.created " . $order_type;
				break;
			case 1:
				$orderby  = "a.hits " . $order_type;
				break;
			case 2:
				$orderby  = "n.ordering " . $order_type;
				break;
			default:
				$orderby  = "RAND()";
				break;
		}
		jimport('joomla.utilities.date');
		$db		= JFactory::getDbo();
		$nullDate = $db->getNullDate();		
		$date = new JDate();
		$now = $date->toMySQL();
				 
		$query	= $db->getQuery(true);
		$query = "SELECT a.*, n.*"
				. "\n FROM #__timedlinklist_link AS n"
				. "\n LEFT JOIN #__content AS a ON a.id = n.article_id"				
				. "\n WHERE 
					( 
						(
						a.state = 1 and n.article_id is not null "
						. "\n AND ( a.publish_up = " .$db->Quote($nullDate) 
						. " OR a.publish_up <= " . $db->Quote($now) . ")"
						. "\n AND ( a.publish_down = " . $db->Quote($nullDate)
						. " OR a.publish_down >= " . $db->Quote($now) . " )
						)or 
						(n.article_id is null or n.article_id =0) 
					) "					
				. "\n AND ( n.date_start_publishing = " .$db->Quote($nullDate) 
				. " OR n.date_start_publishing <= " . $db->Quote($now) . ")"
				. "\n AND ( n.date_finish_publishing = " . $db->Quote($nullDate)
				. " OR n.date_finish_publishing >= " . $db->Quote($now) . " )"
				. " AND n.state=1 "
				. "\n ORDER BY $orderby "
				. "\n limit 0," . $maxitem;
		//echo $query;
		$db->setQuery($query);
		$result = $db->loadObjectList();
		return $result;
	}
}
