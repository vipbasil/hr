<?php
/* @var $this ScoolsController */
/* @var $model Scools */

$this->breadcrumbs=array(
	'Школы'=>array('index'),
	$model->SCOOLS_ID,
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Изменить', 'url'=>array('update', 'id'=>$model->SCOOLS_ID)),
	array('label'=>'Удалить', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->SCOOLS_ID),'confirm'=>'Вы уверены, что хотите удалить?')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Просмотр учебного заведения №<?php echo $model->SCOOLS_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'SCOOLS_ID',
		'DATE_FROM',
		'DATE_TO',
		'DOCUMENT_SERIES',
		'DOCUMENT_NUMBER',
		'DOCYMENT_DATE',
		'COMPLETE',
		'INFO',
		'SCOOL_ID',
		'PERSONAL_ID',
	),
)); ?>
