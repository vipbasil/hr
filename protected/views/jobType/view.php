<?php
/* @var $this JobTypeController */
/* @var $model JobType */

$this->breadcrumbs=array(
	'Список должностей'=>array('index'),
	$model->JOB_TYPE_ID,
);

$this->menu=array(
	array('label'=>'Список должностей', 'url'=>array('index')),
	array('label'=>'Создать должность', 'url'=>array('create')),
	array('label'=>'Изменить должность', 'url'=>array('update', 'id'=>$model->JOB_TYPE_ID)),
	array('label'=>'Удалить должность', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->JOB_TYPE_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Управление должностями', 'url'=>array('admin')),
);
?>

<h1>Должность №<?php echo $model->JOB_TYPE_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'JOB_TYPE_ID',
		'JOB_TYPE_NAME',
	),
)); ?>
