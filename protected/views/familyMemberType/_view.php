<?php
/* @var $this FamilyMemberTypeController */
/* @var $data FamilyMemberType */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('FAMILY_MEMBER_TYPE_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->FAMILY_MEMBER_TYPE_ID), array('view', 'id'=>$data->FAMILY_MEMBER_TYPE_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FAMLIY_MEMBER_TYPE_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->FAMLIY_MEMBER_TYPE_NAME); ?>
	<br />


</div>