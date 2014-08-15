<?php
/* @var $this FileController */
/* @var $model File */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'FILE_ID'); ?>
		<?php echo $form->textField($model,'FILE_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FILE_NAME'); ?>
		<?php echo $form->textField($model,'FILE_NAME',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FILE_PATH'); ?>
		<?php echo $form->textField($model,'FILE_PATH',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FILE_TYPE'); ?>
		<?php echo $form->textField($model,'FILE_TYPE',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->