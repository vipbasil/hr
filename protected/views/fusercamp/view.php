<?php
/* @var $this FusercampController */
/* @var $model Fusercamp */

$this->breadcrumbs=array(
	'Fusercamps'=>array('index'),
	$model->FOLLOW_ID,
);

$this->menu=array(
	array('label'=>'Показать связи', 'url'=>array('index')),
	array('label'=>'Создать связь', 'url'=>array('create')),
	array('label'=>'Изменить связь', 'url'=>array('update', 'id'=>$model->FOLLOW_ID)),
	array('label'=>'Удалить связь', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->FOLLOW_ID),'confirm'=>'Are you sure you want to delete this item?')),

);
?>

<h1>View Fusercamp #<?php echo $model->FOLLOW_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'FOLLOW_ID',
		'users.username',
		'companies.COMPANY_NAME',
	),
)); ?>
