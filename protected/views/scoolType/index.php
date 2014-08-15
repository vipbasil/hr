<?php
/* @var $this ScoolTypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Типы учебных заведений',
);

$this->menu=array(
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Типы учебных заведений</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
