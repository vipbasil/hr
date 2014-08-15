<?php
/* @var $this JobStatusController */
/* @var $model JobStatus */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'job-status-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Поля с <span class="required">*</span> обязвтельны.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'JOB_STATUS_DESCRIPTION'); ?>
		<?php echo $form->textField($model,'JOB_STATUS_DESCRIPTION',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'JOB_STATUS_DESCRIPTION'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->