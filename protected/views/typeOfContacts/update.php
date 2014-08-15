<?php
/* @var $this TypeOfContactsController */
/* @var $model TypeOfContacts */

$this->breadcrumbs=array(
	'Типы контактов'=>array('index'),
	$model->TYPE_OF_CONTACTS_ID=>array('view','id'=>$model->TYPE_OF_CONTACTS_ID),
	'Изменить',
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Просмотр', 'url'=>array('view', 'id'=>$model->TYPE_OF_CONTACTS_ID)),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Изменить модель  <?php echo $model->TYPE_OF_CONTACTS_ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>