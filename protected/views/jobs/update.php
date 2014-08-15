<?php
/* @var $this JobsController */
/* @var $model Jobs */

$this->breadcrumbs=array(
	'Jobs'=>array('index'),
	$model->JOB_ID=>array('view','id'=>$model->JOB_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Jobs', 'url'=>array('index')),
	array('label'=>'Create Jobs', 'url'=>array('create')),
	array('label'=>'View Jobs', 'url'=>array('view', 'id'=>$model->JOB_ID)),
	array('label'=>'Manage Jobs', 'url'=>array('admin')),
);
?>

<h1>Update Jobs <?php echo $model->JOB_ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>