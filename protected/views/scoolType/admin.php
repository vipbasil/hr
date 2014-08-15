<?php
/* @var $this ScoolTypeController */
/* @var $model ScoolType */

$this->breadcrumbs=array(
	'Типы Учебных Заведений'=>array('index'),
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
	$.fn.yiiGridView.update('scool-type-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Управление типами учебных заведений</h1>


<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'scool-type-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'SCOOL_TYPE_ID',
		'SCOOL_TYPE_NAME',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
