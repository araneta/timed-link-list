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
?>
<script type="text/javascript">
	Joomla.submitbutton = function(task)
	{
		if (task == 'type.cancel' || document.formvalidator.isValid(document.id('type-form'))) {
			Joomla.submitform(task, document.getElementById('type-form'));
		}
		else {
			alert('<?php echo $this->escape(JText::_('JGLOBAL_VALIDATION_FORM_FAILED'));?>');
		}
	}
</script>

<form action="<?php echo JRoute::_('index.php?option=com_timedlinklist&layout=edit&id='.(int) $this->item->id); ?>" method="post" name="adminForm" id="type-form" class="form-validate">
	<div class="width-60 fltlft">
		<fieldset class="adminform">
			<legend><?php echo JText::_('COM_TIMEDLINKLIST_LEGEND_TYPE'); ?></legend>
			<ul class="adminformlist">

            
			<li><?php echo $this->form->getLabel('id'); ?>
			<?php echo $this->form->getInput('id'); ?></li>

            
			<li><?php echo $this->form->getLabel('title'); ?>
			<?php echo $this->form->getInput('title'); ?></li>

            
			<li><?php echo $this->form->getLabel('description'); ?>
			<?php echo $this->form->getInput('description'); ?></li>

            
			<li><?php echo $this->form->getLabel('date_added'); ?>
			<?php echo $this->form->getInput('date_added',null,date('Y-m-d',strtotime('now'))); ?></li>

            
			<li><?php echo $this->form->getLabel('date_modified'); ?>
			<?php echo $this->form->getInput('date_modified',null,date('Y-m-d',strtotime('now'))); ?></li>
                       
			<li><?php echo $this->form->getLabel('checked_out'); ?>
			<?php echo $this->form->getInput('checked_out'); ?>
			</li>
			<li><?php echo $this->form->getLabel('checked_out_time'); ?>
				<?php echo $this->form->getInput('checked_out_time'); ?>
			</li>

            </ul>
		</fieldset>
	</div>


	<input type="hidden" name="task" value="" />
	<?php echo JHtml::_('form.token'); ?>
	<div class="clr"></div>
</form>
