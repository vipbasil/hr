<?php
/* @var $this CountriesController */
/* @var $model Countries */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'countries-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Поля с <span class="required">*</span> обязательны.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'COUNTRY_SHORT'); ?>
		<?php echo $form->textField($model,'COUNTRY_SHORT',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'COUNTRY_SHORT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COUNTRY_NAME'); ?>
		<?php echo $form->textField($model,'COUNTRY_NAME',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'COUNTRY_NAME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COUNTRY_ENABLE'); ?>
		<?php echo $form->textField($model,'COUNTRY_ENABLE'); ?>
		<?php echo $form->error($model,'COUNTRY_ENABLE'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->