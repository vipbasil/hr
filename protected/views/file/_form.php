<?php
/* @var $this FileController */
/* @var $model File */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'file-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'FILE_NAME'); ?>
		<?php echo $form->textField($model,'FILE_NAME',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'FILE_NAME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FILE_PATH'); ?>
		<?php echo $form->textField($model,'FILE_PATH',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'FILE_PATH'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FILE_TYPE'); ?>
		<?php echo $form->textField($model,'FILE_TYPE',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'FILE_TYPE'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->