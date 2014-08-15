<?php
/* @var $this TypeOfContactsController */
/* @var $model TypeOfContacts */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'TYPE_OF_CONTACTS_ID'); ?>
		<?php echo $form->textField($model,'TYPE_OF_CONTACTS_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NAME_OF_TYPE_OF_CONTACTS'); ?>
		<?php echo $form->textField($model,'NAME_OF_TYPE_OF_CONTACTS',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->