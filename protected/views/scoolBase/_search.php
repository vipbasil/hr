<?php
/* @var $this ScoolBaseController */
/* @var $model ScoolBase */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>



	<div class="row">
		<?php echo $form->label($model,'SCOOL_NAME'); ?>
		<?php echo $form->textField($model,'SCOOL_NAME',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SCOOL_OLD_NAMES'); ?>
		<?php echo $form->textField($model,'SCOOL_OLD_NAMES',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SCOOL_TYPE_ID'); ?>
		<?php echo $form->textField($model,'SCOOL_TYPE_ID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->