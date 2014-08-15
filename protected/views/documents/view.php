<?php
/* @var $this DocumentsController */
/* @var $model Documents */
 $this->menu=array();
 if(isset($_GET['pid'])&&$_GET['pid']>0){

	$this->breadcrumbs=array(
		'Документы'=>array('index','pid'=>$_GET['pid']),
		$model->DOCUMENT_ID,
	);

	$this->menu=array(
		array('label'=>'Список документов', 'url'=>array('index','pid'=>$_GET['pid'])),
		array('label'=>'Создать документ', 'url'=>array('create','pid'=>$_GET['pid'])),
		array('label'=>'Изменить документ', 'url'=>array('update', 'id'=>$model->DOCUMENT_ID,'pid'=>$_GET['pid'])),
		array('label'=>'Удалить документ', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->DOCUMENT_ID,'pid'=>$_GET['pid']),'confirm'=>'Уверены ли вы, что хотите удалить?')),
		array('label'=>'Управление документов', 'url'=>array('admin','pid'=>$_GET['pid'])),
		array('label'=>'Вернуться к пользователю', 'url'=>array('personal/view','id'=>$_GET['pid'])),
	);
 }else{
        $this->breadcrumbs=array(
		'Документы'=>array('index'),
		$model->DOCUMENT_ID,
	);

	$this->menu=array(
		array('label'=>'Список документов', 'url'=>array('index')),
		array('label'=>'Создать документ', 'url'=>array('create')),
		array('label'=>'Изменить документ', 'url'=>array('update', 'id'=>$model->DOCUMENT_ID)),
		array('label'=>'Удалить документ', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->DOCUMENT_ID),'confirm'=>'Уверены ли вы, что хотите удалить?')),
		array('label'=>'Управление документов', 'url'=>array('admin')),
	);
 }
?>

<h1>Просмотр документа №<?php echo $model->DOCUMENT_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'DOCUMENT_ID',
		'DOCUMENT_SERIES',
		'DOCUMENT_NUMBER',
		'DOCUMENT_DATE_FROM',
		'DOCUMENT_DATE_TO',
		'type.DOCUMENT_TYPE_NAME',
		'personal.full_name',
		'DOCUMENT_EMITENT',
		'company.COMPANY_NAME',
	),
)); ?>
<h1>Файлы этого документа</h1>

<?php
    $provider =File::model()->findAll(array("condition"=>"DOCUMENT_ID =".$model->DOCUMENT_ID.""));
    $activedatapr=new CArrayDataProvider($provider, array('keyField' => 'FILE_ID'));
	$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$activedatapr,
	'itemView'=>'_fileView',
)); ?>