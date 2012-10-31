<?php
// No direct access to this file
defined('_JEXEC') or die;
 
// import the list field type
jimport('joomla.form.helper');
JFormHelper::loadFieldClass('list');
 
/**
 * Type Form Field class for the TimedLinkList component
 */
class JFormFieldType extends JFormFieldList
{
	/**
	 * The field type.
	 *
	 * @var		string
	 */
	protected $type = 'Type';
 
	/**
	 * Method to get a list of options for a list input.
	 *
	 * @return	array		An array of JHtml options.
	 */
	protected function getOptions() 
	{
		$db = JFactory::getDBO();
 		
		$query = $db->getQuery(true); 
 
		$query->select('*');
		$query->from('#__timedlinklist_type');
		$query->where('state = 1');
		$db->setQuery((string)$query);
		$types = $db->loadObjectList();
		$options = array();
		if ($types)
		{
			foreach($types as $xtype) 
			{
				$options[] = JHtml::_('select.option', $xtype->id, $xtype->title );
			}
		}
		
		$options = array_merge(parent::getOptions(), $options);
		return $options;
	}	
}
?>
