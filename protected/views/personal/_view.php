<?php
/* @var $this PersonalController */
/* @var $data Personal */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('PERSONAL_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->PERSONAL_ID), array('view', 'id'=>$data->PERSONAL_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NAME')); ?>:</b>
	<?php echo CHtml::encode($data->NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SECOND_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->SECOND_NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DATE_OF_BITH')); ?>:</b>
	<?php echo CHtml::encode($data->DATE_OF_BITH); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PLACE_OF_BITH')); ?>:</b>
	<?php echo CHtml::encode($data->PLACE_OF_BITH); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NATIONLALITY')); ?>:</b>
	<?php echo CHtml::encode($data->NATIONLALITY); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CITIZENSHIP')); ?>:</b>
	<?php echo CHtml::encode($data->CITIZENSHIP); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('MARITAL_STATUS')); ?>:</b>
	<?php echo CHtml::encode($data->MARITAL_STATUS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SEX')); ?>:</b>
	<?php echo CHtml::encode($data->SEX); ?>
	<br />

	*/
	?>



</div>