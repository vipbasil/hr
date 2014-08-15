<?php
/* @var $this FusercampController */
/* @var $model Fusercamp */

$this->breadcrumbs=array(
	'Fusercamps'=>array('index'),
	$model->FOLLOW_ID=>array('view','id'=>$model->FOLLOW_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'Показать связи', 'url'=>array('index')),
	array('label'=>'Создать связь', 'url'=>array('create')),
	array('label'=>'Просмотреть связь', 'url'=>array('view', 'id'=>$model->FOLLOW_ID)),

);
?>

<h1>Изменить связь № <?php echo $model->FOLLOW_ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>