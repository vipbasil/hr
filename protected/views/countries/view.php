<?php
/* @var $this CountriesController */
/* @var $model Countries */

$this->breadcrumbs=array(
	'Страны'=>array('index'),
	$model->COUNTRY_ID,
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Изменить', 'url'=>array('update', 'id'=>$model->COUNTRY_ID)),
	array('label'=>'Удалить', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->COUNTRY_ID),'confirm'=>'Вы уверены, что хоите удалить данную запись?')),
	array('label'=>'Упроавление', 'url'=>array('admin')),
);
?>

<h1>Просмотр страны #<?php echo $model->COUNTRY_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'COUNTRY_ID',
		'COUNTRY_SHORT',
		'COUNTRY_NAME',
		'COUNTRY_ENABLE',
	),
)); ?>
