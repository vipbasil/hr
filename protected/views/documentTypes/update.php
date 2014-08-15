<?php
/* @var $this DocumentTypesController */
/* @var $model DocumentTypes */

$this->breadcrumbs=array(
	'Типы документов'=>array('index'),
	$model->DOCUMENT_TYPE_ID=>array('view','id'=>$model->DOCUMENT_TYPE_ID),
	'Изменить',
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Просмотр', 'url'=>array('view', 'id'=>$model->DOCUMENT_TYPE_ID)),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Изменить тип документа <?php echo $model->DOCUMENT_TYPE_ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>