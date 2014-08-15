<?php
/* @var $this JobStatusController */
/* @var $model JobStatus */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'JOB_STATUS_ID'); ?>
		<?php echo $form->textField($model,'JOB_STATUS_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'JOB_STATUS_DESCRIPTION'); ?>
		<?php echo $form->textField($model,'JOB_STATUS_DESCRIPTION',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->