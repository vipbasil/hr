<?php
/* @var $this ScoolBaseController */
/* @var $model ScoolBase */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'scool-base-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'SCOOL_NAME'); ?>
		<?php echo $form->textField($model,'SCOOL_NAME',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'SCOOL_NAME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SCOOL_OLD_NAMES'); ?>
		<?php echo $form->textField($model,'SCOOL_OLD_NAMES',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'SCOOL_OLD_NAMES'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SCOOL_TYPE_ID'); ?>
		<?php echo CHtml::activeDropDownList($model,'SCOOL_TYPE_ID', $model->getTypes(),array('prompt' => '(Выбрать тип)')); ?>
		<?php echo $form->error($model,'SCOOL_TYPE_ID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->