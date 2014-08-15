<?php
/* @var $this CountriesController */
/* @var $model Countries */

$this->breadcrumbs=array(
	'Страны'=>array('index'),
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
	$.fn.yiiGridView.update('countries-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Управление странами</h1>


<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'countries-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'COUNTRY_ID',
		'COUNTRY_SHORT',
		'COUNTRY_NAME',
		'COUNTRY_ENABLE',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
