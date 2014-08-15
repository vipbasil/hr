<?php
/* @var $this PersonalController */
/* @var $model Personal */

$this->breadcrumbs=array(
	'Personals'=>array('index'),
	$model->NAME,
);

$this->menu=array(
	array('label'=>'List Personal', 'url'=>array('index')),
	array('label'=>'Create Personal', 'url'=>array('create')),
	array('label'=>'Update Personal', 'url'=>array('update', 'id'=>$model->PERSONAL_ID)),
	array('label'=>'Delete Personal', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PERSONAL_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Personal', 'url'=>array('admin')),
	array('label'=>'Работа с документами', 'url'=>array('documents', 'id'=>$model->PERSONAL_ID)),
	array('label'=>'Добавить запись о работе', 'url'=>array('createJob', 'id'=>$model->PERSONAL_ID)),
	array('label'=>'Добавить запись о члене семьи', 'url'=>array('createFamily', 'id'=>$model->PERSONAL_ID)),
	array('label'=>'Добавить новый контакт', 'url'=>array('createContact', 'id'=>$model->PERSONAL_ID)),
	array('label'=>'Добавить запись об образовании', 'url'=>array('createScool', 'id'=>$model->PERSONAL_ID)),
);
?>

<h1>View Personal #<?php echo $model->PERSONAL_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'PERSONAL_ID',
		'NAME',
		'SECOND_NAME',
		'DATE_OF_BITH',
		'PLACE_OF_BITH',
		'NATIONLALITY',
		'CITIZENSHIP',
		'MARITAL_STATUS',
		'SEX',
	),
));



 ?>
<h1>Записи в трудовой книжке</h1>
 <?php
    if(count($model->companies)>0)
   $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$model->getMyJobs($model->PERSONAL_ID),
	'itemView'=>'_jobs_view',
)); ?>
<h1>Образование</h1>
 <?php
    if(count($model->scools)>0)
   $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$model->getMyScools($model->PERSONAL_ID),
	'itemView'=>'_scool_view',
)); ?>
<h1>Члены семьи</h1>
 <?php
    if(count($model->family)>0)
   $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$model->getMyFamily(),
	'itemView'=>'_family_view',
)); ?>
<h1>Контакты</h1>
 <?php
    if(count($model->family)>0)
   $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$model->getMyContacts(),
	'itemView'=>'_contact_view',
)); ?>
<h1>Компании</h1>
 <?php
    if(count($model->companies)>0)
   $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$model->getMyCompanies(),
	'itemView'=>'_companies_view',
)); ?>

