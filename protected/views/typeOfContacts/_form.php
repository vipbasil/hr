<?php
/* @var $this TypeOfContactsController */
/* @var $model TypeOfContacts */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'type-of-contacts-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Поля с <span class="required">*</span> обязательны.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'NAME_OF_TYPE_OF_CONTACTS'); ?>
		<?php echo $form->textField($model,'NAME_OF_TYPE_OF_CONTACTS',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'NAME_OF_TYPE_OF_CONTACTS'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->