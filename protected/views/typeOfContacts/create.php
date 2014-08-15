<?php
/* @var $this TypeOfContactsController */
/* @var $model TypeOfContacts */

$this->breadcrumbs=array(
	'Типы контактов'=>array('index'),
	'Создать',
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Создать новый тип контактов</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>