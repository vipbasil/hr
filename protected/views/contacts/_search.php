<?php
/* @var $this ContactsController */
/* @var $model Contacts */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'CONTACT_ID'); ?>
		<?php echo $form->textField($model,'CONTACT_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'INFO'); ?>
		<?php echo $form->textField($model,'INFO',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TYPE_OF_CONTACTS_ID'); ?>
		<?php echo $form->textField($model,'TYPE_OF_CONTACTS_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PERSONAL_ID'); ?>
		<?php echo $form->textField($model,'PERSONAL_ID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->