<?php
/* @var $this FusercampController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Fusercamps',
);

$this->menu=array(
	array('label'=>'Создать связь', 'url'=>array('create')),

);
?>

<h1>Связи</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
