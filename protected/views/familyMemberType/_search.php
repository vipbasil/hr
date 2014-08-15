<?php
/* @var $this FamilyMemberTypeController */
/* @var $model FamilyMemberType */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'FAMILY_MEMBER_TYPE_ID'); ?>
		<?php echo $form->textField($model,'FAMILY_MEMBER_TYPE_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FAMLIY_MEMBER_TYPE_NAME'); ?>
		<?php echo $form->textField($model,'FAMLIY_MEMBER_TYPE_NAME',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->