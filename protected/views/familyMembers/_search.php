<?php
/* @var $this FamilyMembersController */
/* @var $model FamilyMembers */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'FAMILY_MEMBERS__ID'); ?>
		<?php echo $form->textField($model,'FAMILY_MEMBERS__ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NAME'); ?>
		<?php echo $form->textField($model,'NAME',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SECOND_NAME'); ?>
		<?php echo $form->textField($model,'SECOND_NAME',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DATE_OF_BITH'); ?>
		<?php echo $form->textField($model,'DATE_OF_BITH'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SEX'); ?>
		<?php echo $form->textField($model,'SEX',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FAMILY_MEMBER_TYPE_ID'); ?>
		<?php echo $form->textField($model,'FAMILY_MEMBER_TYPE_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PERSONAL_ID'); ?>
		<?php echo $form->textField($model,'PERSONAL_ID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->