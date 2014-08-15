<?php
/* @var $this DaysController */
/* @var $model Days */

$this->breadcrumbs=array(
	'Days'=>array('index'),
	$model->DAY_ID=>array('view','id'=>$model->DAY_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Days', 'url'=>array('index')),
	array('label'=>'Create Days', 'url'=>array('create')),
	array('label'=>'View Days', 'url'=>array('view', 'id'=>$model->DAY_ID)),
	array('label'=>'Manage Days', 'url'=>array('admin')),
);
?>

<h1>Update Days <?php echo $model->DAY_ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>