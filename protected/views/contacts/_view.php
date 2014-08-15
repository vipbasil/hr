<?php
/* @var $this ContactsController */
/* @var $data Contacts */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('CONTACT_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->CONTACT_ID), array('view', 'id'=>$data->CONTACT_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('INFO')); ?>:</b>
	<?php echo CHtml::encode($data->INFO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TYPE_OF_CONTACTS_ID')); ?>:</b>
	<?php echo CHtml::encode($data->TYPE_OF_CONTACTS_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PERSONAL_ID')); ?>:</b>
	<?php echo CHtml::encode($data->PERSONAL_ID); ?>
	<br />


</div>