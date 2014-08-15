<?php
/* @var $this JobsController */
/* @var $model Jobs */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'JOB_ID'); ?>
		<?php echo $form->textField($model,'JOB_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COMPANY_ID'); ?>
		<?php echo $form->textField($model,'COMPANY_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PERSONAL_ID'); ?>
		<?php echo $form->textField($model,'PERSONAL_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'JOB_DATE_FROM'); ?>
		<?php echo $form->textField($model,'JOB_DATE_FROM'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'JOB_DATE_TO'); ?>
		<?php echo $form->textField($model,'JOB_DATE_TO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'JOB_STATUS_ID'); ?>
		<?php echo $form->textField($model,'JOB_STATUS_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'JOB_TITLE'); ?>
		<?php echo $form->textField($model,'JOB_TITLE',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SALARY'); ?>
		<?php echo $form->textField($model,'SALARY',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->