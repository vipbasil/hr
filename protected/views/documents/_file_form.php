<?php
/* @var $this FileController */
/* @var $model File */
/* @var $form CActiveForm */
print_r($DOCUMENT_ID);
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'file-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

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
 	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Add'); ?>
	</div>
<?php $this->endWidget(); ?>
</div><!-- form -->