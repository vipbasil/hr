<?php
/* @var $this JobStatusController */
/* @var $model JobStatus */

$this->breadcrumbs=array(
	'Список статусов деятельности'=>array('index'),
	$model->JOB_STATUS_ID,
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Изменить', 'url'=>array('update', 'id'=>$model->JOB_STATUS_ID)),
	array('label'=>'Удалить', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->JOB_STATUS_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Просмотр №<?php echo $model->JOB_STATUS_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
				'JOB_STATUS_DESCRIPTION',
	),
)); ?>
