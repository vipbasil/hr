<?php
/* @var $this ScoolsController */
/* @var $model Scools */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'SCOOLS_ID'); ?>
		<?php echo $form->textField($model,'SCOOLS_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DATE_FROM'); ?>
		<?php echo $form->textField($model,'DATE_FROM'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DATE_TO'); ?>
		<?php echo $form->textField($model,'DATE_TO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DOCUMENT_SERIES'); ?>
		<?php echo $form->textField($model,'DOCUMENT_SERIES',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DOCUMENT_NUMBER'); ?>
		<?php echo $form->textField($model,'DOCUMENT_NUMBER',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DOCYMENT_DATE'); ?>
		<?php echo $form->textField($model,'DOCYMENT_DATE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COMPLETE'); ?>
		<?php echo $form->textField($model,'COMPLETE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'INFO'); ?>
		<?php echo $form->textField($model,'INFO',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SCOOL_ID'); ?>
		<?php echo $form->textField($model,'SCOOL_ID'); ?>
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