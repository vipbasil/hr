<?php
/* @var $this FamilyMembersController */
/* @var $model FamilyMembers */

$this->breadcrumbs=array(
	'Family Members'=>array('index'),
	$model->NAME=>array('view','id'=>$model->FAMILY_MEMBERS__ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List FamilyMembers', 'url'=>array('index')),
	array('label'=>'Create FamilyMembers', 'url'=>array('create')),
	array('label'=>'View FamilyMembers', 'url'=>array('view', 'id'=>$model->FAMILY_MEMBERS__ID)),
	array('label'=>'Manage FamilyMembers', 'url'=>array('admin')),
);
?>

<h1>Update FamilyMembers <?php echo $model->FAMILY_MEMBERS__ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>