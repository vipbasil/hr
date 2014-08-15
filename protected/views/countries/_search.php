<?php
/* @var $this CountriesController */
/* @var $model Countries */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'COUNTRY_ID'); ?>
		<?php echo $form->textField($model,'COUNTRY_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COUNTRY_SHORT'); ?>
		<?php echo $form->textField($model,'COUNTRY_SHORT',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COUNTRY_NAME'); ?>
		<?php echo $form->textField($model,'COUNTRY_NAME',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COUNTRY_ENABLE'); ?>
		<?php echo $form->textField($model,'COUNTRY_ENABLE'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->