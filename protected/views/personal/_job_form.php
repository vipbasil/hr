<?php
/* @var $this JobsController */
/* @var $model Jobs */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'jobs-form',
	'enableAjaxValidation'=>false,
));
//print_r($model);die();
?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model);

	?>
 		<div class="row">
		<?php echo $form->labelEx($model,'COMPANY_ID'); ?>
		<?php echo CHtml::activeDropDownList($model,'COMPANY_ID', $model->getCompanies(),array('prompt' => '(Выбрать)')); ?>
		<?php echo $form->error($model,'COMPANY_ID'); ?>
	</div>

  <div class="row">
		<?php echo $form->labelEx($model,'JOB_DATE_FROM');   ?>
		<?php
		$date_to=date('d-m-Y');
		if(isset($_GET['id']))
		$date_to=$model->JOB_DATE_FROM;
		//echo $form->textField($model,'JOB_DATE_FROM');
		$this->widget('zii.widgets.jui.CJuiDatePicker',array(
   			 'attribute'=>'JOB_DATE_FROM',
   			 'model'=>$model,
    		 'flat'=>true,//remove to hide the datepicker
    		'value'=>$model->JOB_DATE_FROM,
    		'options'=>array(
    		'dateFormat'=>'yy-mm-dd',
        	'showAnim'=>'slide',
        	'changeYear'=>true,
        	'changeMonth'=>true,//'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
    		),
    		'htmlOptions'=>array(
        	'style'=>''
    		),
)			);

		?>
		<?php echo $form->error($model,'JOB_DATE_FROM'); ?>
	</div>

	<div class="row">

		<?php echo $form->labelEx($model,'JOB_DATE_TO'); ?>
		 <p class="note">Для текущей работы ставить дату больше чем нынешнюю.</p>
		<?php
		$date_to=date('d-m-Y');
		if(isset($_GET['id']))
		$date_to=$model->JOB_DATE_TO;
		//echo $form->textField($model,'JOB_DATE_FROM');
		$this->widget('zii.widgets.jui.CJuiDatePicker',array(
   			 'attribute'=>'JOB_DATE_TO',
   			 'model'=>$model,
    		 'flat'=>true,//remove to hide the datepicker
    		 'value'=>$model->JOB_DATE_TO,
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
		<?php echo $form->error($model,'JOB_DATE_TO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'JOB_STATUS_ID'); ?>
		<?php echo CHtml::activeDropDownList($model,'JOB_STATUS_ID', $model->getJobStatus(),array('prompt' => '(Выбрать)')); ?>
		<?php echo $form->error($model,'JOB_STATUS_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'JOB_TITLE'); ?>
		<?php echo CHtml::activeDropDownList($model,'JOB_TITLE', $model->getJobTitle(),array('prompt' => '(Выбрать)')); ?>
		<?php echo $form->error($model,'JOB_TITLE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SALARY'); ?>
		<?php echo $form->textField($model,'SALARY',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'SALARY'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->