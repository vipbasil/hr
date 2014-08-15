<?php
/* @var $this JobsController */
/* @var $data Jobs */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('JOB_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->JOB_ID), array('view', 'id'=>$data->JOB_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COMPANY_ID')); ?>:</b>
	<?php echo CHtml::encode($data->COMPANY_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PERSONAL_ID')); ?>:</b>
	<?php echo CHtml::encode($data->PERSONAL_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('JOB_DATE_FROM')); ?>:</b>
	<?php echo CHtml::encode($data->JOB_DATE_FROM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('JOB_DATE_TO')); ?>:</b>
	<?php echo CHtml::encode($data->JOB_DATE_TO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('JOB_STATUS_ID')); ?>:</b>
	<?php echo CHtml::encode($data->JOB_STATUS_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('JOB_TITLE')); ?>:</b>
	<?php echo CHtml::encode($data->JOB_TITLE); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('SALARY')); ?>:</b>
	<?php echo CHtml::encode($data->SALARY); ?>
	<br />

	*/ ?>

</div>