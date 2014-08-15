<?php
/* @var $this JobTypeController */
/* @var $data JobType */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('JOB_TYPE_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->JOB_TYPE_ID), array('view', 'id'=>$data->JOB_TYPE_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('JOB_TYPE_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->JOB_TYPE_NAME); ?>
	<br />


</div>