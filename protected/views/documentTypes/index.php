<?php
/* @var $this DocumentTypesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Типы документов',
);

$this->menu=array(
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Типы документов</h1>

<?php
	$dataProvider->sort->defaultOrder='MANDATORY DESC';
	$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
