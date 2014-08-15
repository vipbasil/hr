<?php
/* @var $this CompaniesController */
/* @var $model Companies */

$this->breadcrumbs=array(
	'Предприятия'=>array('index'),
	'Управление',
);

$this->menu=array(
	array('label'=>'Список предприятий', 'url'=>array('index')),
	array('label'=>'Создать предприятие', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('companies-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Управление предприятиями</h1>

<p>
Вы можете по желанию вводить оператор сравнения (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) в начале каждого искомого значения, для спецификации того, каким образом должно проихсодить сравнение.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'companies-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'COMPANY_ID',
		'COMPANY_NAME',
		'COMPANY_TYPE',
		'COMPANY_INFO',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
