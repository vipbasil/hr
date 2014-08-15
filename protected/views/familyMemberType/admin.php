<?php
/* @var $this FamilyMemberTypeController */
/* @var $model FamilyMemberType */

$this->breadcrumbs=array(
	'Типы членов семьи'=>array('index'),
	'Управление',
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Создать новый', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('family-member-type-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Управление типами членов семьи</h1>



<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'family-member-type-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'FAMILY_MEMBER_TYPE_ID',
		'FAMLIY_MEMBER_TYPE_NAME',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
