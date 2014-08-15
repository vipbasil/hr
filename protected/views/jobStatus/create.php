<?php
/* @var $this JobStatusController */
/* @var $model JobStatus */

$this->breadcrumbs=array(
	'Статусы деятельности'=>array('index'),
	'Создать',
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Создать новый статус</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>