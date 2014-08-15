<?php
/* @var $this JobTypeController */
/* @var $model JobType */

$this->breadcrumbs=array(
	'Список Должностей'=>array('index'),
	'Управление',
);

$this->menu=array(
	array('label'=>'Список Должностей', 'url'=>array('index')),
	array('label'=>'Создать Должность', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('job-type-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Управление Должностями</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'job-type-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
			'JOB_TYPE_NAME',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
