<?php
/* @var $this DocumentTypesController */
/* @var $model DocumentTypes */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'document-types-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Поля с <span class="required">*</span> обязательны.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'DOCUMENT_TYPE_NAME'); ?>
		<?php echo $form->textField($model,'DOCUMENT_TYPE_NAME',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'DOCUMENT_TYPE_NAME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MANDATORY'); ?>
		<?php echo $form->dropDownList($model,'MANDATORY' , array( '0' => 'Необязателен','1' => 'Обязателен'),array('empty'=>'Не выбрано'));
			 /* echo $form->textField($model,'MANDATORY',array('size'=>45,'maxlength'=>45));*/
		?>
		<?php echo $form->error($model,'MANDATORY'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'MULTY_COMPANY'); ?>
		<?php echo $form->textField($model,'MULTY_COMPANY',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'MULTY_COMPANY'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->