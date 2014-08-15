<?php
/* @var $this ScoolTypeController */
/* @var $model ScoolType */

$this->breadcrumbs=array(
	'Типы учебных заведений'=>array('index'),
	$model->SCOOL_TYPE_ID=>array('view','id'=>$model->SCOOL_TYPE_ID),
	'Изменить',
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Просмотр', 'url'=>array('view', 'id'=>$model->SCOOL_TYPE_ID)),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Изменить тип учебного заведения <?php echo $model->SCOOL_TYPE_ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>