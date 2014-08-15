<?php
/* @var $this JobsController */
/* @var $data Jobs */
?>

<div class="view">

	<b><?php echo "№:".( $index+1) ?></b>

	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('JOB_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->JOB_ID), array('UpdateJob', 'id'=>$data->PERSONAL_ID,'jid'=>$data->JOB_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COMPANY_ID')); ?>:</b>
	<?php echo CHtml::encode($data->company['COMPANY_NAME']); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PERSONAL_ID')); ?>:</b>
	<?php echo CHtml::encode($data->personal["full_name"]); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('JOB_DATE_FROM')); ?>:</b>
	<?php echo CHtml::encode($data->JOB_DATE_FROM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('JOB_DATE_TO')); ?>:</b>
	<?php echo CHtml::encode($data->JOB_DATE_TO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('JOB_STATUS_ID')); ?>:</b>
	<?php echo CHtml::encode($data->status['JOB_STATUS_DESCRIPTION']); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('JOB_TITLE')); ?>:</b>
	<?php echo CHtml::encode($data->type['JOB_TYPE_NAME']); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('SALARY')); ?>:</b>
	<?php echo CHtml::encode($data->SALARY); ?>
	<br />

	*/ ?>

</div>