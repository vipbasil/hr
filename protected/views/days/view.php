<?php
/* @var $this DaysController */
/* @var $model Days */

$this->breadcrumbs=array(
	'Days'=>array('index'),
	$model->DAY_ID,
);

$this->menu=array(
	array('label'=>'List Days', 'url'=>array('index')),
	array('label'=>'Create Days', 'url'=>array('create')),
	array('label'=>'Update Days', 'url'=>array('update', 'id'=>$model->DAY_ID)),
	array('label'=>'Delete Days', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->DAY_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Days', 'url'=>array('admin')),
);
?>

<h1>View Days #<?php echo $model->DAY_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'DAY_ID',
		'DATE',
		'TYPE_OF_DAY_ID',
	),
)); ?>
