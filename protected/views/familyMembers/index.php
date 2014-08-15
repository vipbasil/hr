<?php
/* @var $this FamilyMembersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Family Members',
);

$this->menu=array(
	array('label'=>'Create FamilyMembers', 'url'=>array('create')),
	array('label'=>'Manage FamilyMembers', 'url'=>array('admin')),
);
?>

<h1>Family Members</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
