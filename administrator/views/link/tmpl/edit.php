<?php
/**
 * @version     1.0.0
 * @package     com_timedlinklist
 * @copyright   Copyright (C) 2012. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Created by com_combuilder - http://www.notwebdesign.com
 */

// no direct access
defined('_JEXEC') or die;

JHtml::_('behavior.tooltip');
JHtml::_('behavior.formvalidation');
JFactory::getDocument()->addScript(JURI::root().$host.'administrator/components/com_timedlinklist/views/link/js/jquery-1.4.4.min.js');
JFactory::getDocument()->addScript(JURI::root().$host.'administrator/components/com_timedlinklist/views/link/js/link.js');
?>
<script type="text/javascript">
	Joomla.submitbutton = function(task)
	{
		if (task == 'link.cancel' || document.formvalidator.isValid(document.id('link-form'))) {
			Joomla.submitform(task, document.getElementById('link-form'));
		}
		else {
			alert('<?php echo $this->escape(JText::_('JGLOBAL_VALIDATION_FORM_FAILED'));?>');
		}
	}
</script>

<form action="<?php echo JRoute::_('index.php?option=com_timedlinklist&layout=edit&id='.(int) $this->item->id); ?>" method="post" name="adminForm" id="link-form" class="form-validate">
	<div class="width-60 fltlft">
		<fieldset class="adminform">
			<legend><?php echo JText::_('COM_TIMEDLINKLIST_LEGEND_LINK'); ?></legend>
			<ul class="adminformlist">

            
			<li><?php echo $this->form->getLabel('id'); ?>
			<?php echo $this->form->getInput('id'); ?></li>

            
			<li><?php echo $this->form->getLabel('id_type'); ?>
			<?php echo $this->form->getInput('id_type'); ?></li>

            
			<li><?php echo $this->form->getLabel('title'); ?>
			<?php echo $this->form->getInput('title'); ?></li>

            
			<li><?php echo $this->form->getLabel('url'); ?>
			<?php echo $this->form->getInput('url'); ?></li>
			
			<li><?php //echo $this->form->getLabel('mymenuitem'); ?>
			<?php// echo $this->form->getInput('mymenuitem'); ?></li>

            <li><?php echo $this->form->getLabel('article_id'); ?>
            <?php echo $this->form->getInput('article_id'); ?></li>
            
			<li><?php echo $this->form->getLabel('date_created'); ?>
			<?php echo $this->form->getInput('date_created'); ?></li>

            
			<li><?php echo $this->form->getLabel('date_modified'); ?>
			<?php echo $this->form->getInput('date_modified'); ?></li>

            <li><?php echo $this->form->getLabel('date_start_publishing'); ?>
			<?php echo $this->form->getInput('date_start_publishing'); ?></li>
            
			<li><?php echo $this->form->getLabel('date_finish_publishing'); ?>
			<?php echo $this->form->getInput('date_finish_publishing'); ?></li>

            

            <li><?php echo $this->form->getLabel('state'); ?>
                    <?php echo $this->form->getInput('state'); ?></li><li><?php echo $this->form->getLabel('checked_out'); ?>
                    <?php echo $this->form->getInput('checked_out'); ?></li><li><?php echo $this->form->getLabel('checked_out_time'); ?>
                    <?php echo $this->form->getInput('checked_out_time'); ?></li>

            </ul>
		</fieldset>
	</div>


	<input type="hidden" name="task" value="" />
	<?php echo JHtml::_('form.token'); ?>
	<div class="clr"></div>
</form>
