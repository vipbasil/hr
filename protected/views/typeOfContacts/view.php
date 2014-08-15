<?php
/* @var $this TypeOfContactsController */
/* @var $model TypeOfContacts */

$this->breadcrumbs=array(
	'Типы контактов'=>array('index'),
	$model->TYPE_OF_CONTACTS_ID,
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Изменить', 'url'=>array('update', 'id'=>$model->TYPE_OF_CONTACTS_ID)),
	array('label'=>'Удалить', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->TYPE_OF_CONTACTS_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>просмотр модели №<?php echo $model->TYPE_OF_CONTACTS_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'TYPE_OF_CONTACTS_ID',
		'NAME_OF_TYPE_OF_CONTACTS',
	),
)); ?>
