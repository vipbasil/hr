<?php
/* @var $this JobTypeController */
/* @var $model JobType */

$this->breadcrumbs=array(
	'Список должостей'=>array('index'),
	$model->JOB_TYPE_ID=>array('view','id'=>$model->JOB_TYPE_ID),
	'Изменить',
);

$this->menu=array(
	array('label'=>'Список должностей', 'url'=>array('index')),
	array('label'=>'Создать должность', 'url'=>array('create')),
	array('label'=>'Просмореть должность', 'url'=>array('view', 'id'=>$model->JOB_TYPE_ID)),
	array('label'=>'Управление должностями', 'url'=>array('admin')),
);
?>

<h1>Изменить должность <?php echo $model->JOB_TYPE_ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>