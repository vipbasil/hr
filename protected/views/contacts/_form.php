<?php
/* @var $this ContactsController */
/* @var $model Contacts */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contacts-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'INFO'); ?>
		<?php echo $form->textField($model,'INFO',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'INFO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TYPE_OF_CONTACTS_ID'); ?>
		<?php echo $form->textField($model,'TYPE_OF_CONTACTS_ID'); ?>
		<?php echo $form->error($model,'TYPE_OF_CONTACTS_ID'); ?>
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