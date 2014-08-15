<?php
/* @var $this FusercampController */
/* @var $data Fusercamp */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('FOLLOW_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->FOLLOW_ID), array('view', 'id'=>$data->FOLLOW_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('users.username')); ?>:</b>

	 <?php echo CHtml::encode($data->users->username); ?>

	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('companies.COMPANY_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->companies->COMPANY_NAME); ?>
	<br />


</div>