<?php
/* @var $this FusercampController */
/* @var $model Fusercamp */

$this->breadcrumbs=array(
	'Fusercamps'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Показать связи', 'url'=>array('index')),

);
?>

<h1>Создать связь</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>