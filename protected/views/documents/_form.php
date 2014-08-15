<?php
/* @var $this DocumentsController */
/* @var $model Documents */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'documents-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">Поля с <span class="required">*</span> обязаельны.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'DOCUMENT_SERIES'); ?>
		<?php echo $form->textField($model,'DOCUMENT_SERIES',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'DOCUMENT_SERIES'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DOCUMENT_NUMBER'); ?>
		<?php echo $form->textField($model,'DOCUMENT_NUMBER',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'DOCUMENT_NUMBER'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DOCUMENT_DATE_FROM'); ?>
		<?php echo $form->textField($model,'DOCUMENT_DATE_FROM'); ?>
		<?php echo $form->error($model,'DOCUMENT_DATE_FROM'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DOCUMENT_DATE_TO'); ?>
		<?php echo $form->textField($model,'DOCUMENT_DATE_TO'); ?>
		<?php echo $form->error($model,'DOCUMENT_DATE_TO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DOCUMENT_TYPE_ID'); ?>
		<?php echo CHtml::activeDropDownList($model,'DOCUMENT_TYPE_ID', $model->getTypes(),array('prompt' => '(Выбрать тип документа)')); ?>
		<?php echo $form->error($model,'DOCUMENT_TYPE_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PERSONAL_ID'); ?>
		<?php
		 $personal_name =array('empty'=>'Выбрать работника');
		 if(isset($_GET['pid'])&&$_GET['pid']>0){
		 	$personal_name =array('empty'=>array($_GET['pid'] =>Personal::model()->findByPk($_GET['pid'])->full_name));
		 }
		  echo CHtml::activeDropDownList($model,'PERSONAL_ID', $model->getPersonal(),$personal_name); ?>
		<?php echo $form->error($model,'PERSONAL_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DOCUMENT_EMITENT'); ?>
		<?php echo $form->textField($model,'DOCUMENT_EMITENT',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'DOCUMENT_EMITENT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'companies.COMPANY_NAME'); ?>
		<?php
		 	$model->COMPANY_ID =Yii::app()->getModule('user')->user()->profile->company->COMPANY_ID;
		 	echo CHtml::activeDropDownList($model,'COMPANY_ID', $model->getCompanies(),array('prompt' => '(Выбрать Компанию)')); ?>
		<?php echo $form->error($model,'COMPANY_ID'); ?>
	</div>
	 <div class="row">
  	<?php
  		$this->widget('CMultiFileUpload', array(
    	 'model'=>$model,
   		 'name'=>'files',
 		 'attribute'=>'files',
     	 'accept'=>'jpg|gif|pdf|txt|doc|docx|xls|xlsx|txt|tiff|jpeg|png',
     	 'duplicate' => 'Duplicate file!', // useful, i think
     	 'denied' => 'Invalid file type', // useful, i think
 		 ));
	?>
	</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->