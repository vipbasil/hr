<?php
/* @var $this JobTypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Список должностей',
);

$this->menu=array(
	array('label'=>'Создать должность', 'url'=>array('create')),
	array('label'=>'Управление должностями', 'url'=>array('admin')),
);
?>

<h1>Должности</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
