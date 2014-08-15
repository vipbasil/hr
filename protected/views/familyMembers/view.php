<?php
/* @var $this FamilyMembersController */
/* @var $model FamilyMembers */

$this->breadcrumbs=array(
	'Family Members'=>array('index'),
	$model->NAME,
);

$this->menu=array(
	array('label'=>'List FamilyMembers', 'url'=>array('index')),
	array('label'=>'Create FamilyMembers', 'url'=>array('create')),
	array('label'=>'Update FamilyMembers', 'url'=>array('update', 'id'=>$model->FAMILY_MEMBERS__ID)),
	array('label'=>'Delete FamilyMembers', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->FAMILY_MEMBERS__ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FamilyMembers', 'url'=>array('admin')),
);
?>

<h1>View FamilyMembers #<?php echo $model->FAMILY_MEMBERS__ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'FAMILY_MEMBERS__ID',
		'NAME',
		'SECOND_NAME',
		'DATE_OF_BITH',
		'SEX',
		'FAMILY_MEMBER_TYPE_ID',
		'PERSONAL_ID',
	),
)); ?>
