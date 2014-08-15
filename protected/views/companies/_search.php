<?php
/* @var $this CompaniesController */
/* @var $model Companies */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'COMPANY_ID'); ?>
		<?php echo $form->textField($model,'COMPANY_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COMPANY_NAME'); ?>
		<?php echo $form->textField($model,'COMPANY_NAME',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COMPANY_TYPE'); ?>
		<?php echo $form->textField($model,'COMPANY_TYPE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COMPANY_INFO'); ?>
		<?php echo $form->textField($model,'COMPANY_INFO',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->