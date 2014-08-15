<?php
/* @var $this ScoolTypeController */
/* @var $model ScoolType */

$this->breadcrumbs=array(
	'Типы учебных заведений'=>array('index'),
	$model->SCOOL_TYPE_ID,
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Изменить', 'url'=>array('update', 'id'=>$model->SCOOL_TYPE_ID)),
	array('label'=>'Удалить', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->SCOOL_TYPE_ID),'confirm'=>'Вы уверены, что желаете удалить?')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Просмотр типа учебного заведения №<?php echo $model->SCOOL_TYPE_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'SCOOL_TYPE_ID',
		'SCOOL_TYPE_NAME',
	),
)); ?>
