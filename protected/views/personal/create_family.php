<?php
/* @var $this JobsController */
/* @var $model Jobs */
/* @var $personal Personal*/

$this->breadcrumbs=array(
	'Personals'=>array('index'),
	'Создание записи о работе',
);

$this->menu=array(
	array('label'=>'List Personal',   'url'=>array('index')),
	array('label'=>'Create Personal', 'url'=>array('create')),
	array('label'=>'Update Personal', 'url'=>array('update', 'id'=>$personal->PERSONAL_ID)),
	array('label'=>'View Personal',   'url'=>array('view', 'id'=>$personal->PERSONAL_ID)),
	array('label'=>'Delete Personal', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$personal->PERSONAL_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Personal', 'url'=>array('admin')),
	array('label'=>'Работа с документами', 'url'=>array('documents', 'id'=>$personal->PERSONAL_ID)),
	array('label'=>'Создать запись о работе', 'url'=>array('createJob', 'id'=>$personal->PERSONAL_ID)),
	array('label'=>'Создать новый контакт', 'url'=>array('createContact', 'id'=>$personal->PERSONAL_ID)),


);
?>

<h1>Создать запись о члене семьи</h1>

<?php echo $this->renderPartial('_family_form', array('model'=>$model)); ?>