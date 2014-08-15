<?php
/* @var $this TypeOfContactsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Типы контактов',
);

$this->menu=array(
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Типы контактов</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
