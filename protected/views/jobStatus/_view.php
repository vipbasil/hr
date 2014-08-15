<?php
/* @var $this JobStatusController */
/* @var $data JobStatus */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('JOB_STATUS_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->JOB_STATUS_ID), array('view', 'id'=>$data->JOB_STATUS_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('JOB_STATUS_DESCRIPTION')); ?>:</b>
	<?php echo CHtml::encode($data->JOB_STATUS_DESCRIPTION); ?>
	<br />


</div>