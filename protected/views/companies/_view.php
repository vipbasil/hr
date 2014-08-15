<?php
/* @var $this CompaniesController */
/* @var $data Companies */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('COMPANY_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->COMPANY_ID), array('view', 'id'=>$data->COMPANY_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COMPANY_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->COMPANY_NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COMPANY_TYPE')); ?>:</b>
	<?php echo CHtml::encode($data->COMPANY_TYPE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COMPANY_INFO')); ?>:</b>
	<?php echo CHtml::encode($data->COMPANY_INFO); ?>
	<br />


</div>