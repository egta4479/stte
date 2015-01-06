<?php
/* @var $this LectureClassroomController */
/* @var $model LectureClassroom */

$this->breadcrumbs=array(
	'Lecture Classrooms'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LectureClassroom', 'url'=>array('index')),
	array('label'=>'Manage LectureClassroom', 'url'=>array('admin')),
);
?>

<h1>Create LectureClassroom</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>