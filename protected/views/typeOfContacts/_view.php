<?php
/* @var $this TypeOfContactsController */
/* @var $data TypeOfContacts */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('TYPE_OF_CONTACTS_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->TYPE_OF_CONTACTS_ID), array('view', 'id'=>$data->TYPE_OF_CONTACTS_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NAME_OF_TYPE_OF_CONTACTS')); ?>:</b>
	<?php echo CHtml::encode($data->NAME_OF_TYPE_OF_CONTACTS); ?>
	<br />


</div>