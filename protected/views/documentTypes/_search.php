<?php
/* @var $this DocumentTypesController */
/* @var $model DocumentTypes */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'DOCUMENT_TYPE_ID'); ?>
		<?php echo $form->textField($model,'DOCUMENT_TYPE_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DOCUMENT_TYPE_NAME'); ?>
		<?php echo $form->textField($model,'DOCUMENT_TYPE_NAME',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MANDATORY'); ?>
		<?php echo $form->textField($model,'MANDATORY'); ?>
	</div>
   	<div class="row">
		<?php echo $form->labelEx($model,'MULTY_COMPANY'); ?>
		<?php echo $form->textField($model,'MULTY_COMPANY',array('size'=>45,'maxlength'=>45)); ?>

	</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->