<?php
/* @var $this CompaniesController */
/* @var $model Companies */

$this->breadcrumbs=array(
	'Companies'=>array('index'),
	'Создать',
);

$this->menu=array(
	array('label'=>'Список предприятий', 'url'=>array('index')),
	array('label'=>'Управлениие предприятиями', 'url'=>array('admin')),
);
?>

<h1>Создать предприятие</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>