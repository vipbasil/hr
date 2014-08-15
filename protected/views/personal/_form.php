<?php
/* @var $this PersonalController */
/* @var $model Personal */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'personal-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'NAME'); ?>
		<?php echo $form->textField($model,'NAME',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'NAME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SECOND_NAME'); ?>
		<?php echo $form->textField($model,'SECOND_NAME',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'SECOND_NAME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DATE_OF_BITH'); ?>
		<?php echo $form->textField($model,'DATE_OF_BITH'); ?>
		<?php echo $form->error($model,'DATE_OF_BITH'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PLACE_OF_BITH'); ?>
		<?php echo $form->textField($model,'PLACE_OF_BITH',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'PLACE_OF_BITH'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NATIONLALITY'); ?>
		<?php echo $form->textField($model,'NATIONLALITY',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'NATIONLALITY'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CITIZENSHIP'); ?>
		<?php echo $form->textField($model,'CITIZENSHIP',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'CITIZENSHIP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MARITAL_STATUS'); ?>
		<?php echo CHtml::dropDownList('Personal[MARITAL_STATUS]', $model->MARITAL_STATUS,array('0' => 'В браке', 'F' => ' Не состоит в браке')); ?>
		<?php echo $form->error($model,'MARITAL_STATUS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SEX'); ?>
		<?php echo CHtml::dropDownList('Personal[SEX]', $model->SEX,array('M' => 'Мужчина', 'F' => 'Женщина')); ?>
		<?php echo $form->error($model,'SEX'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'Добавить предприятие'); ?>
		<?php echo CHtml::dropDownList('Personal[get_companies][]', $model->companies,  $model->getFreeCompanies(), array( 'multiple' => 'multiple')); ?>

	</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>


</div><!-- form -->