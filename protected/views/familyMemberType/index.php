<?php
/* @var $this FamilyMemberTypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Типы членов семьи',
);

$this->menu=array(
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Типы членов семьи</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
