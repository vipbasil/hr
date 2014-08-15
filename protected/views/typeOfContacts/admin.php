<?php
/* @var $this TypeOfContactsController */
/* @var $model TypeOfContacts */

$this->breadcrumbs=array(
	'Типы контактов'=>array('index'),
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
	$.fn.yiiGridView.update('type-of-contacts-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Управление типами </h1>



<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'type-of-contacts-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'TYPE_OF_CONTACTS_ID',
		'NAME_OF_TYPE_OF_CONTACTS',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
