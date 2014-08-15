<?php
/* @var $this ScoolsController */
/* @var $model Scools */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'scools-form',
	'enableAjaxValidation'=>false,
)); ?>



	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'DATE_FROM'); ?>:
		<?php
		$date_to=date('d-m-Y');

		//echo $form->textField($model,'JOB_DATE_FROM');
		$this->widget('zii.widgets.jui.CJuiDatePicker',array(
   			 'attribute'=>'DATE_FROM',
   			 'model'=>$model,
    		 'flat'=>true,//remove to hide the datepicker
    		 'value'=>$model->DATE_FROM,
    		'options'=>array(
    		'dateFormat'=>'yy-mm-dd',
        	'showAnim'=>'slide',
        	'changeYear'=>true,
        	'changeMonth'=>true,//'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
    		),
    		'htmlOptions'=>array(
        	'style'=>''
    		),
			));
 ?>
		<?php echo $form->error($model,'DATE_FROM'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DATE_TO'); ?>
				<?php
		$date_to=date('d-m-Y');

		//echo $form->textField($model,'JOB_DATE_FROM');
		$this->widget('zii.widgets.jui.CJuiDatePicker',array(
   			 'attribute'=>'DATE_TO',
   			 'model'=>$model,
    		 'flat'=>true,//remove to hide the datepicker
    		 'value'=>$model->DATE_TO,
    		'options'=>array(
    		'dateFormat'=>'yy-mm-dd',
        	'showAnim'=>'slide',
        	'changeYear'=>true,
        	'changeMonth'=>true,//'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
    		),
    		'htmlOptions'=>array(
        	'style'=>''
    		),
			));
 ?>
		<?php echo $form->error($model,'DATE_TO'); ?>
	</div>

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
		<?php echo $form->labelEx($model,'DOCYMENT_DATE'); ?>

						<?php
		$date_to=date('d-m-Y');

		//echo $form->textField($model,'JOB_DATE_FROM');
		$this->widget('zii.widgets.jui.CJuiDatePicker',array(
   			 'attribute'=>'DOCYMENT_DATE',
   			 'model'=>$model,
    		 'flat'=>true,//remove to hide the datepicker
    		 'value'=>$model->DOCYMENT_DATE,
    		'options'=>array(
    		'dateFormat'=>'yy-mm-dd',
        	'showAnim'=>'slide',
        	'changeYear'=>true,
        	'changeMonth'=>true,//'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
    		),
    		'htmlOptions'=>array(
        	'style'=>''
    		),
			));
 ?>
		<?php echo $form->error($model,'DOCYMENT_DATE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COMPLETE'); ?>
		<?php echo $form->textField($model,'COMPLETE'); ?>
		<?php echo $form->error($model,'COMPLETE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'INFO'); ?>
		<?php echo $form->textField($model,'INFO',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'INFO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SCOOL_ID'); ?>
		<?php echo CHtml::activeDropDownList($model,'SCOOL_ID', $model->getScools(),array('prompt' => '(Выбрать Учебное заведение)')); ?>
		<?php echo $form->error($model,'SCOOL_ID'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->