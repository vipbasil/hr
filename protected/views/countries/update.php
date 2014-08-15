<?php
/* @var $this CountriesController */
/* @var $model Countries */

$this->breadcrumbs=array(
	'Страны'=>array('index'),
	$model->COUNTRY_ID=>array('view','id'=>$model->COUNTRY_ID),
	'Изменить',
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Просмотр', 'url'=>array('view', 'id'=>$model->COUNTRY_ID)),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Изменить <?php echo $model->COUNTRY_ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>