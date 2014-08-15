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

	<p class="note">Поля с <span class="required">*</span> обязательны.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'TYPE_OF_CONTACTS_ID'); ?>
		<?php echo CHtml::activeDropDownList($model,'TYPE_OF_CONTACTS_ID', $model->getTypes(),array('prompt' => '(Выбрать тип контакта)')); ?>
		<?php echo $form->error($model,'TYPE_OF_CONTACTS_ID'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'INFO'); ?>
		<?php echo $form->textField($model,'INFO',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'INFO'); ?>
	</div>




	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->