<?php
/* @var $this FamilyMembersController */
/* @var $model FamilyMembers */

$this->breadcrumbs=array(
	'Family Members'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FamilyMembers', 'url'=>array('index')),
	array('label'=>'Manage FamilyMembers', 'url'=>array('admin')),
);
?>

<h1>Create FamilyMembers</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>