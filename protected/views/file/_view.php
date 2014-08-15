<?php
/* @var $this FileController */
/* @var $data File */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('FILE_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->FILE_ID), array('view', 'id'=>$data->FILE_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FILE_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->FILE_NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FILE_PATH')); ?>:</b>
	<?php echo CHtml::encode($data->FILE_PATH); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FILE_TYPE')); ?>:</b>
	<?php echo CHtml::encode($data->FILE_TYPE); ?>
	<br />


</div>