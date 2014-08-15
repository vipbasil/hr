<?php
/* @var $this JobsController */
/* @var $model Jobs */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'jobs-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'COMPANY_ID'); ?>
		<?php echo $form->textField($model,'COMPANY_ID'); ?>
		<?php echo $form->error($model,'COMPANY_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PERSONAL_ID'); ?>
		<?php echo $form->textField($model,'PERSONAL_ID'); ?>
		<?php echo $form->error($model,'PERSONAL_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'JOB_DATE_FROM'); ?>
		<?php echo $form->textField($model,'JOB_DATE_FROM'); ?>
		<?php echo $form->error($model,'JOB_DATE_FROM'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'JOB_DATE_TO'); ?>
		<?php echo $form->textField($model,'JOB_DATE_TO'); ?>
		<?php echo $form->error($model,'JOB_DATE_TO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'JOB_STATUS_ID'); ?>
		<?php echo $form->textField($model,'JOB_STATUS_ID'); ?>
		<?php echo $form->error($model,'JOB_STATUS_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'JOB_TITLE'); ?>
		<?php echo $form->textField($model,'JOB_TITLE',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'JOB_TITLE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SALARY'); ?>
		<?php echo $form->textField($model,'SALARY',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'SALARY'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->