<?php
/* @var $this FamilyMembersController */
/* @var $data FamilyMembers */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('FAMILY_MEMBERS__ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->FAMILY_MEMBERS__ID), array('view', 'id'=>$data->FAMILY_MEMBERS__ID)); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('SEX')); ?>:</b>
	<?php echo CHtml::encode($data->SEX); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FAMILY_MEMBER_TYPE_ID')); ?>:</b>
	<?php echo CHtml::encode($data->FAMILY_MEMBER_TYPE_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PERSONAL_ID')); ?>:</b>
	<?php echo CHtml::encode($data->PERSONAL_ID); ?>
	<br />


</div>