<?php
/* @var $this CompaniesController */
/* @var $model Companies */

$this->breadcrumbs=array(
	'Предприятия'=>array('index'),
	$model->COMPANY_ID=>array('view','id'=>$model->COMPANY_ID),
	'Изменить',
);

$this->menu=array(
	array('label'=>'Список предприятия', 'url'=>array('index')),
	array('label'=>'Создать предприятие', 'url'=>array('create')),
	array('label'=>'Просмотр', 'url'=>array('view', 'id'=>$model->COMPANY_ID)),
	array('label'=>'Управдение предприятиями', 'url'=>array('admin')),
);
?>

<h1>Update Companies <?php echo $model->COMPANY_ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>