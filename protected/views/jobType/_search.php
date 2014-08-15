<?php
/* @var $this JobTypeController */
/* @var $model JobType */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'JOB_TYPE_ID'); ?>
		<?php echo $form->textField($model,'JOB_TYPE_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'JOB_TYPE_NAME'); ?>
		<?php echo $form->textField($model,'JOB_TYPE_NAME',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->