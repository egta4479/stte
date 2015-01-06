<?php
/* @var $this ClassroomController */
/* @var $model Classroom */

$this->breadcrumbs=array(
	'Classrooms'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Classroom', 'url'=>array('index')),
	array('label'=>'Create Classroom', 'url'=>array('create')),
	array('label'=>'Update Classroom', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Classroom', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Classroom', 'url'=>array('admin')),
);
?>

<h1>View Classroom #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'code',
		'name',
		'parentcode',
		'type',
	),
)); ?>
