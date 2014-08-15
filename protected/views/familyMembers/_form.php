<?php
/* @var $this FamilyMembersController */
/* @var $model FamilyMembers */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'family-members-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'NAME'); ?>
		<?php echo $form->textField($model,'NAME',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'NAME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SECOND_NAME'); ?>
		<?php echo $form->textField($model,'SECOND_NAME',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'SECOND_NAME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DATE_OF_BITH'); ?>
		<?php echo $form->textField($model,'DATE_OF_BITH'); ?>
		<?php echo $form->error($model,'DATE_OF_BITH'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SEX'); ?>
		<?php echo $form->textField($model,'SEX',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'SEX'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FAMILY_MEMBER_TYPE_ID'); ?>
		<?php echo $form->textField($model,'FAMILY_MEMBER_TYPE_ID'); ?>
		<?php echo $form->error($model,'FAMILY_MEMBER_TYPE_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PERSONAL_ID'); ?>
		<?php echo $form->textField($model,'PERSONAL_ID'); ?>
		<?php echo $form->error($model,'PERSONAL_ID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->