<?php
/* @var $this CompaniesController */
/* @var $model Companies */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'companies-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Поля с <span class="required">*</span> обязательны.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'COMPANY_ID'); ?>
		<?php echo $form->textField($model,'COMPANY_ID'); ?>
		<?php echo $form->error($model,'COMPANY_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COMPANY_NAME'); ?>
		<?php echo $form->textField($model,'COMPANY_NAME',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'COMPANY_NAME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COMPANY_TYPE'); ?>
		<?php echo $form->textField($model,'COMPANY_TYPE'); ?>
		<?php echo $form->error($model,'COMPANY_TYPE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COMPANY_INFO'); ?>
		<?php echo $form->textField($model,'COMPANY_INFO',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'COMPANY_INFO'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->