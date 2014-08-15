<?php
/* @var $this ScoolBaseController */
/* @var $model ScoolBase */

$this->breadcrumbs=array(
	'Учебные заведения'=>array('index'),
	'Создать',
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Создать учебное заведение</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>