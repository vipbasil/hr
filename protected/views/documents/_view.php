<?php
/* @var $this DocumentsController */
/* @var $data Documents */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('DOCUMENT_ID')); ?>:</b>
	<?php
		if(isset($_GET['pid'])&&$_GET['pid']>0)
		{
			echo CHtml::link(CHtml::encode($data->DOCUMENT_ID), array('view', 'id'=>$data->DOCUMENT_ID,'pid'=>$_GET['pid']));
		}else
		{
			echo CHtml::link(CHtml::encode($data->DOCUMENT_ID), array('view', 'id'=>$data->DOCUMENT_ID));
		}

		?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DOCUMENT_SERIES')); ?>:</b>
	<?php echo CHtml::encode($data->DOCUMENT_SERIES); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DOCUMENT_NUMBER')); ?>:</b>
	<?php echo CHtml::encode($data->DOCUMENT_NUMBER); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DOCUMENT_DATE_FROM')); ?>:</b>
	<?php echo CHtml::encode($data->DOCUMENT_DATE_FROM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DOCUMENT_DATE_TO')); ?>:</b>
	<?php echo CHtml::encode($data->DOCUMENT_DATE_TO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type.DOCUMENT_TYPE_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->type->DOCUMENT_TYPE_NAME); ?>
	<br />

	<b><?php  echo CHtml::encode($data->getAttributeLabel('personal.full_name')); ?>:</b>
	<?php echo CHtml::encode($data->personal["full_name"]); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('DOCUMENT_EMITENT')); ?>:</b>
	<?php echo CHtml::encode($data->DOCUMENT_EMITENT); */?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COMPANY_ID')); ?>:</b>
	<?php echo CHtml::encode($data->company["COMPANY_NAME"]); ?>
	<br />



</div>