<?php
/**
 * @version     1.0.0
 * @package     com_timedlinklist
 * @copyright   Copyright (C) 2012. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Created by com_combuilder - http://www.notwebdesign.com
 */

// No direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.controllerform');

/**
 * Link controller class.
 */
class TimedlinklistControllerLink extends JControllerForm
{

    function __construct() {
        $this->view_list = 'links';
        parent::__construct();
        
    }
    function get_article_url(){
		$id = intval(JRequest::getVar('id'));
		$db = JFactory::getDBO();
		$query = $db->getQuery(true);
		$sql = "SELECT c.id, c.alias,cat.alias as catalias FROM #__content c
		inner join #__categories cat on c.catid = cat.id
		WHERE c.id = '".$id."' LIMIT 1";
        $db->setQuery($sql);
        if ($row = $db->loadObject ())
        {
			$url = sprintf('%s/%d-%s.html',$row->catalias,$row->id,$row->alias);
            echo json_encode(array('error'=>false, 'msg'=>$url));
        }else{
			echo json_encode(array('error'=>true,'msg'=>'not found'));
		}
		exit(0);
	}
    

}
