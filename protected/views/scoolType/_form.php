<?php
/* @var $this ScoolTypeController */
/* @var $model ScoolType */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'scool-type-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Поля с <span class="required">*</span> обязательны.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'SCOOL_TYPE_NAME'); ?>
		<?php echo $form->textField($model,'SCOOL_TYPE_NAME',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'SCOOL_TYPE_NAME'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->