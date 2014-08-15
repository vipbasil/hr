<?php
/* @var $this FusercampController */
/* @var $model Fusercamp */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'fusercamp-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Поля с <span class="required">*</span> обязательны.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'users.username'); ?>
		<?php echo CHtml::activeDropDownList($model,'USER_ID', $model->getUsers(),array('prompt' => '(Выбрать пользователя)')); ?>
		<?php echo $form->error($model,'USER_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'companies.COMPANY_NAME'); ?>
		<?php echo CHtml::activeDropDownList($model,'COMPANY_ID', $model->getCompanies(),array('prompt' => '(Выбрать Компанию)')); ?>
		<?php echo $form->error($model,'COMPANY_ID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->