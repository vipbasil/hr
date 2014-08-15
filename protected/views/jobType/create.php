<?php
/* @var $this JobTypeController */
/* @var $model JobType */

$this->breadcrumbs=array(
	'Список Должностей'=>array('index'),
	'Создать',
);

$this->menu=array(
	array('label'=>'Список Должностей', 'url'=>array('index')),
	array('label'=>'Управление Должностями', 'url'=>array('admin')),
);
?>

<h1>Create JobType</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>