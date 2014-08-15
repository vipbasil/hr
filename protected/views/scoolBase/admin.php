<?php
/* @var $this ScoolBaseController */
/* @var $model ScoolBase */

$this->breadcrumbs=array(
	'Учебные заведения '=>array('index'),
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
	$.fn.yiiGridView.update('scool-base-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Управление учебными заведениями</h1>



<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'scool-base-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'SCOOL_ID',
		'SCOOL_NAME',
		'SCOOL_OLD_NAMES',
		'SCOOL_TYPE_ID',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
