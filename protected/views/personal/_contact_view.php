<?php
/* @var $this ContactsController */
/* @var $data Contacts */
?>

<div class="view">

	<?php echo CHtml::link(CHtml::encode($data->CONTACT_ID), array('updateContact', 'jid'=>$data->CONTACT_ID,'id'=>$data->PERSONAL_ID)); ?>&nbsp;
	<b><?php echo CHtml::encode($data->type['NAME_OF_TYPE_OF_CONTACTS']); ?>:</b>
	<?php echo CHtml::encode($data->INFO); ?>
	<br />




</div>