<?php
/* @var $this FamilyMemberTypeController */
/* @var $model FamilyMemberType */

$this->breadcrumbs=array(
	'Типы членов семьи'=>array('index'),
	'Создание',
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Новый тип члена семьи</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>