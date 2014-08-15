<?php
/* @var $this ScoolTypeController */
/* @var $model ScoolType */

$this->breadcrumbs=array(
	'Типы учебных заведений'=>array('index'),
	'Создать',
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Создать тип учебных заведений</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>