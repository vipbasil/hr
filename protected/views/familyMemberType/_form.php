<?php
/* @var $this FamilyMemberTypeController */
/* @var $model FamilyMemberType */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'family-member-type-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Поля с <span class="required">*</span> обязательны.</p>

	<?php echo $form->errorSummary($model); ?>



	<div class="row">
		<?php echo $form->labelEx($model,'FAMLIY_MEMBER_TYPE_NAME'); ?>
		<?php echo $form->textField($model,'FAMLIY_MEMBER_TYPE_NAME',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'FAMLIY_MEMBER_TYPE_NAME'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->