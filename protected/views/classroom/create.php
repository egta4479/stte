<?php
/* @var $this ClassroomController */
/* @var $model Classroom */

$this->breadcrumbs=array(
	'Classrooms'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Classroom', 'url'=>array('index')),
	array('label'=>'Manage Classroom', 'url'=>array('admin')),
);
?>

<h1>Create Classroom</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>