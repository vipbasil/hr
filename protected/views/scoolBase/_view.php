<?php
/* @var $this ScoolBaseController */
/* @var $data ScoolBase */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('SCOOL_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->SCOOL_ID), array('view', 'id'=>$data->SCOOL_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SCOOL_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->SCOOL_NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SCOOL_OLD_NAMES')); ?>:</b>
	<?php echo CHtml::encode($data->SCOOL_OLD_NAMES); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SCOOL_TYPE_ID')); ?>:</b>
	<?php echo CHtml::encode($data->type['SCOOL_TYPE_NAME']); ?>
	<br />


</div>