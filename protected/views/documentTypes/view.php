<?php
/* @var $this DocumentTypesController */
/* @var $model DocumentTypes */

$this->breadcrumbs=array(
	'Типы документов'=>array('index'),
	$model->DOCUMENT_TYPE_ID,
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Изменить', 'url'=>array('update', 'id'=>$model->DOCUMENT_TYPE_ID)),
	array('label'=>'Удалить', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->DOCUMENT_TYPE_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Просмотр типа документа №<?php echo $model->DOCUMENT_TYPE_ID; ?></h1>

<?php

	$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,

	'attributes'=>array(
		'DOCUMENT_TYPE_ID',
		'DOCUMENT_TYPE_NAME',
		'MANDATORY',
		'MULTY_COMPANY',
	),
)); ?>
