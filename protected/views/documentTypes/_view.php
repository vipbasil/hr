<?php
/* @var $this DocumentTypesController */
/* @var $data DocumentTypes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('DOCUMENT_TYPE_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->DOCUMENT_TYPE_ID), array('view', 'id'=>$data->DOCUMENT_TYPE_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DOCUMENT_TYPE_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->DOCUMENT_TYPE_NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MANDATORY')); ?>:</b>
	<?php echo CHtml::encode($data->MANDATORY); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('MULTY_COMPANY')); ?>:</b>
	<?php echo CHtml::encode($data->MULTY_COMPANY); ?>
	<br />


</div>