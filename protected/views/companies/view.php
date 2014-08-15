<?php
/* @var $this CompaniesController */
/* @var $model Companies */

$this->breadcrumbs=array(
	'Предприятия'=>array('index'),
	$model->COMPANY_ID,
);

$this->menu=array(
	array('label'=>'Список предприятий', 'url'=>array('index')),
	array('label'=>'Создать предприятие', 'url'=>array('create')),
	array('label'=>'Изменить предприятие', 'url'=>array('update', 'id'=>$model->COMPANY_ID)),
	array('label'=>'Удалить предприятие', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->COMPANY_ID),'confirm'=>'Уверены ли вы, что хоите удалить данное предприятие?')),
	array('label'=>'Управление предприятиями', 'url'=>array('admin')),
);
?>

<h1>Просмотреть предприятие №<?php echo $model->COMPANY_ID; ?></h1>

<?php

$this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes'=>array(
		'COMPANY_ID',
		'COMPANY_NAME',
		'COMPANY_TYPE',
		'COMPANY_INFO',
	),
)); ?>
