<?php
/* @var $this CountriesController */
/* @var $data Countries */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('COUNTRY_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->COUNTRY_ID), array('view', 'id'=>$data->COUNTRY_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COUNTRY_SHORT')); ?>:</b>
	<?php echo CHtml::encode($data->COUNTRY_SHORT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COUNTRY_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->COUNTRY_NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COUNTRY_ENABLE')); ?>:</b>
	<?php echo CHtml::encode($data->COUNTRY_ENABLE); ?>
	<br />


</div>