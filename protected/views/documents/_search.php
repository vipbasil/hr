<?php
/* @var $this DocumentsController */
/* @var $model Documents */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'DOCUMENT_ID'); ?>
		<?php echo $form->textField($model,'DOCUMENT_ID'); ?>
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
		<?php echo $form->label($model,'DOCUMENT_DATE_FROM'); ?>
		<?php echo $form->textField($model,'DOCUMENT_DATE_FROM'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DOCUMENT_DATE_TO'); ?>
		<?php echo $form->textField($model,'DOCUMENT_DATE_TO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DOCUMENT_TYPE_ID'); ?>
		<?php echo $form->textField($model,'DOCUMENT_TYPE_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PERSONAL_ID'); ?>
		<?php echo $form->textField($model,'PERSONAL_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DOCUMENT_EMITENT'); ?>
		<?php echo $form->textField($model,'DOCUMENT_EMITENT',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COMPANY_ID'); ?>
		<?php echo $form->textField($model,'COMPANY_ID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->