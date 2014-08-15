<?php
/* @var $this JobTypeController */
/* @var $model JobType */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'job-type-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Поля с <span class="required">*</span> обязательны.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'JOB_TYPE_NAME'); ?>
		<?php echo $form->textField($model,'JOB_TYPE_NAME',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'JOB_TYPE_NAME'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->