<?php
/* @var $this DocumentsController */
/* @var $model Documents */
$pid=0;
if(isset($_GET['pid']))
	{
	 $pid=$_GET['pid'];
	}
$this->breadcrumbs=array(
	'Документы'=>array('index'),
	'Управление',
);
if(isset($_GET['pid'])&&$_GET['pid']>0)
	{
	 $this->menu=array(
		array('label'=>'Список документов', 'url'=>array('index','pid'=>$pid)),
		array('label'=>'Создать новый документ', 'url'=>array('create','pid'=>$pid)),
		array('label'=>'Вернуться к пользователю', 'url'=>array('personal/view','id'=>$pid)),
	);
   }else
   {
   	  $this->menu=array(
		array('label'=>'Список документов', 'url'=>array('index')),
		array('label'=>'Создать новый документ', 'url'=>array('create')),
	);

   }


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('documents-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Управление документами</h1>

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

<?php
	$dataProvider=$model->search();
	if(isset($_GET['pid'])&&$_GET['pid']>0)   $dataProvider->criteria->condition= "PERSONAL_ID=".$_GET['pid'];;
	$dataProvider->criteria->addcondition( "COMPANY_ID=".Yii::app()->getModule('user')->user()->profile->getAttribute('active_company'));

	$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'documents-grid',
	'dataProvider'=>$dataProvider,
	'filter'=>$model,
	'columns'=>array(
		'DOCUMENT_ID',
		'DOCUMENT_SERIES',
		'DOCUMENT_NUMBER',
		'DOCUMENT_DATE_FROM',
		'DOCUMENT_DATE_TO',
        array(
                        'name'=>'DOCUMENT_TYPE_NAME',
                       // 'filter'=>CHtml::listData(DocumentTypes::model()->findAll(), 'DOCUMENT_TYPE_ID', 'DOCUMENT_TYPE_NAME'),
                     /*   //'filter'=>CHtml::activeTextField($model,'DOCUMENT_TYPE_NAME'),
                        //'value'=>'DocumentTypes::Model()->FindByPk($data->DOCUMENT_TYPE_ID)->DOCUMENT_TYPE_NAME',
                        */
                        'value'=>'$data->type["DOCUMENT_TYPE_NAME"]',
                ),
        array(
                        'name'=>'PERSONAL_NAME',
                        //'filter'=>CHtml::listData(Personal::model()->findAll(), 'PERSONAL_ID', 'full_name'),
                        'value'=>'$data->personal["full_name"]',
                ),

		'DOCUMENT_EMITENT',
		'company.COMPANY_NAME',

		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
