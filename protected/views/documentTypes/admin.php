<?php
/* @var $this DocumentTypesController */
/* @var $model DocumentTypes */

$this->breadcrumbs=array(
	'Типы документов'=>array('index'),
	'Управление типами документов',
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
	$.fn.yiiGridView.update('document-types-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Управление типами документов</h1>

<p>
Вы можете по желанию вводить оператор сравнения (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) в начале каждого искомого значения, для спецификации того, каким образом должно проихсодить сравнение.
</p>

<?php echo CHtml::link('Специальный поиск','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'document-types-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'DOCUMENT_TYPE_ID',
		'DOCUMENT_TYPE_NAME',
		'MANDATORY',
		'MULTY_COMPANY',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
