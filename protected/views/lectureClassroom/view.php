<?php
/* @var $this LectureClassroomController */
/* @var $model LectureClassroom */

$this->breadcrumbs=array(
	'Lecture Classrooms'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List LectureClassroom', 'url'=>array('index')),
	array('label'=>'Create LectureClassroom', 'url'=>array('create')),
	array('label'=>'Update LectureClassroom', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete LectureClassroom', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LectureClassroom', 'url'=>array('admin')),
);
?>

<h1>View LectureClassroom #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'lecture.code',
		'lecture.name',
		'classroom.code',
		'classroom.name',

	),
)); ?>
