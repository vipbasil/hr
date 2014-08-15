<?php
/* @var $this ScoolsController */
/* @var $model Scools */

$this->breadcrumbs=array(
	'Учебные Заведения'=>array('index'),
	$model->SCOOLS_ID=>array('view','id'=>$model->SCOOLS_ID),
	'Изменить',
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Просмотр', 'url'=>array('view', 'id'=>$model->SCOOLS_ID)),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Изаменить учебное заведение <?php echo $model->SCOOLS_ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>