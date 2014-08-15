<?php
/* @var $this ScoolBaseController */
/* @var $model ScoolBase */

$this->breadcrumbs=array(
	'Учебные заведения'=>array('index'),
	$model->SCOOL_ID,
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Изменить', 'url'=>array('update', 'id'=>$model->SCOOL_ID)),
	array('label'=>'Удалить', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->SCOOL_ID),'confirm'=>'Уверены ли вы, что хотите удалить эту запись?')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Просмотр №<?php echo $model->SCOOL_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'SCOOL_ID',
		'SCOOL_NAME',
		'SCOOL_OLD_NAMES',
		'SCOOL_TYPE_ID',
	),
)); ?>
