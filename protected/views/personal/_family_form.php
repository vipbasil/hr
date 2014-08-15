<?php
/* @var $this FamilyMembersController */
/* @var $model FamilyMembers */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'family-members-form',
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

		<?php
		$date_to=date('d-m-Y');

		//echo $form->textField($model,'JOB_DATE_FROM');
		$this->widget('zii.widgets.jui.CJuiDatePicker',array(
   			 'attribute'=>'DATE_OF_BITH',
   			 'model'=>$model,
    		 'flat'=>true,//remove to hide the datepicker
    		 'value'=>$model->DATE_OF_BITH,
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
			<?php echo $form->error($model,'DATE_OF_BITH'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SEX'); ?>
		<?php echo CHtml::dropDownList(' FamilyMembers[SEX]', $model->SEX,array('1' => 'Male', '2' => 'Female')); ?>
		<?php echo $form->error($model,'SEX'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FAMILY_MEMBER_TYPE_ID'); ?>
		<?php echo CHtml::dropDownList(' FamilyMembers[FAMILY_MEMBER_TYPE_ID]', $model->FAMILY_MEMBER_TYPE_ID, $model->getFamilyMembersType()); ?>
		<?php echo $form->error($model,'FAMILY_MEMBER_TYPE_ID'); ?>
	</div>



	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->