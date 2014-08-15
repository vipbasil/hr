<?php
/* @var $this ScoolsController */
/* @var $model Scools */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'scools-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Поля с <span class="required">*</span> обязательны.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'DATE_FROM'); ?>
		<?php echo $form->textField($model,'DATE_FROM'); ?>
		<?php echo $form->error($model,'DATE_FROM'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DATE_TO'); ?>
		<?php echo $form->textField($model,'DATE_TO'); ?>
		<?php echo $form->error($model,'DATE_TO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DOCUMENT_SERIES'); ?>
		<?php echo $form->textField($model,'DOCUMENT_SERIES',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'DOCUMENT_SERIES'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DOCUMENT_NUMBER'); ?>
		<?php echo $form->textField($model,'DOCUMENT_NUMBER',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'DOCUMENT_NUMBER'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DOCYMENT_DATE'); ?>
		<?php echo $form->textField($model,'DOCYMENT_DATE'); ?>
		<?php echo $form->error($model,'DOCYMENT_DATE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COMPLETE'); ?>
		<?php echo $form->textField($model,'COMPLETE'); ?>
		<?php echo $form->error($model,'COMPLETE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'INFO'); ?>
		<?php echo $form->textField($model,'INFO',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'INFO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SCOOL_ID'); ?>
		<?php echo $form->textField($model,'SCOOL_ID'); ?>
		<?php echo $form->error($model,'SCOOL_ID'); ?>
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