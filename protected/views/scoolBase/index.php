<?php
/* @var $this ScoolBaseController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Учебные заведения',
);

$this->menu=array(
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Учебные заведения</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
