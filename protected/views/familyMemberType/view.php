<?php
/* @var $this FamilyMemberTypeController */
/* @var $model FamilyMemberType */

$this->breadcrumbs=array(
	'Типы членов семьи'=>array('index'),
	$model->FAMILY_MEMBER_TYPE_ID,
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Изменить', 'url'=>array('update', 'id'=>$model->FAMILY_MEMBER_TYPE_ID)),
	array('label'=>'Удалить', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->FAMILY_MEMBER_TYPE_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Просмотр типа № <?php echo $model->FAMILY_MEMBER_TYPE_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'FAMILY_MEMBER_TYPE_ID',
		'FAMLIY_MEMBER_TYPE_NAME',
	),
)); ?>
