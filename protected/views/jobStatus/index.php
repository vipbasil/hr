<?php
/* @var $this JobStatusController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Статусы деятельности',
);

$this->menu=array(
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Статусы</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
