<?php
/* @var $this JobStatusController */
/* @var $model JobStatus */

$this->breadcrumbs=array(
	'Список статусов деятельности'=>array('index'),
	$model->JOB_STATUS_ID=>array('view','id'=>$model->JOB_STATUS_ID),
	'Изменить',
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Просмотр', 'url'=>array('view', 'id'=>$model->JOB_STATUS_ID)),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Изменить <?php echo $model->JOB_STATUS_ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>