<?php
/* @var $this ScoolTypeController */
/* @var $data ScoolType */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('SCOOL_TYPE_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->SCOOL_TYPE_ID), array('view', 'id'=>$data->SCOOL_TYPE_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SCOOL_TYPE_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->SCOOL_TYPE_NAME); ?>
	<br />


</div>