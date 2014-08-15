<?php
/* @var $this ScoolsController */
/* @var $model Scools */

$this->breadcrumbs=array(
	'Учебные Заведения'=>array('index'),
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
	$.fn.yiiGridView.update('scools-grid', {
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
	'id'=>'scools-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'SCOOLS_ID',
		'DATE_FROM',
		'DATE_TO',
		'DOCUMENT_SERIES',
		'DOCUMENT_NUMBER',
		'DOCYMENT_DATE',
		/*
		'COMPLETE',
		'INFO',
		'SCOOL_ID',
		'PERSONAL_ID',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
