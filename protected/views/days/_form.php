<?php
/* @var $this DaysController */
/* @var $model Days */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'days-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'DAY_ID'); ?>
		<?php echo $form->textField($model,'DAY_ID'); ?>
		<?php echo $form->error($model,'DAY_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DATE'); ?>
		<?php echo $form->textField($model,'DATE'); ?>
		<?php echo $form->error($model,'DATE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TYPE_OF_DAY_ID'); ?>
		<?php echo $form->textField($model,'TYPE_OF_DAY_ID'); ?>
		<?php echo $form->error($model,'TYPE_OF_DAY_ID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->