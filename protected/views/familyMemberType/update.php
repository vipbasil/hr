<?php
/* @var $this FamilyMemberTypeController */
/* @var $model FamilyMemberType */

$this->breadcrumbs=array(
	'Типы членов семьи'=>array('index'),
	$model->FAMILY_MEMBER_TYPE_ID=>array('view','id'=>$model->FAMILY_MEMBER_TYPE_ID),
	'Изменить',
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Просмотр', 'url'=>array('view', 'id'=>$model->FAMILY_MEMBER_TYPE_ID)),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Изменяем тип <?php echo $model->FAMILY_MEMBER_TYPE_ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>