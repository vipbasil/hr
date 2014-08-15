<?php
/* @var $this ScoolsController */
/* @var $data Scools */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('SCOOLS_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->SCOOLS_ID), array('view', 'id'=>$data->SCOOLS_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DATE_FROM')); ?>:</b>
	<?php echo CHtml::encode($data->DATE_FROM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DATE_TO')); ?>:</b>
	<?php echo CHtml::encode($data->DATE_TO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DOCUMENT_SERIES')); ?>:</b>
	<?php echo CHtml::encode($data->DOCUMENT_SERIES); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DOCUMENT_NUMBER')); ?>:</b>
	<?php echo CHtml::encode($data->DOCUMENT_NUMBER); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DOCYMENT_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->DOCYMENT_DATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COMPLETE')); ?>:</b>
	<?php echo CHtml::encode($data->COMPLETE); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('INFO')); ?>:</b>
	<?php echo CHtml::encode($data->INFO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SCOOL_ID')); ?>:</b>
	<?php echo CHtml::encode($data->SCOOL_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PERSONAL_ID')); ?>:</b>
	<?php echo CHtml::encode($data->PERSONAL_ID); ?>
	<br />

	*/ ?>

</div>