<?php
/* @var $this ScoolBaseController */
/* @var $model ScoolBase */

$this->breadcrumbs=array(
	'Учебные заведения'=>array('index'),
	$model->SCOOL_ID=>array('view','id'=>$model->SCOOL_ID),
	'Изменить',
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Просмотр', 'url'=>array('view', 'id'=>$model->SCOOL_ID)),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Изменить запись№ <?php echo $model->SCOOL_ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>