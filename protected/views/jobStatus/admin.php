<?php
/* @var $this JobStatusController */
/* @var $model JobStatus */

$this->breadcrumbs=array(
	'Статусы деятельности'=>array('index'),
	'Управление',
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('job-status-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Управление статусами</h1>



<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'job-status-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'JOB_STATUS_ID',
		'JOB_STATUS_DESCRIPTION',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
