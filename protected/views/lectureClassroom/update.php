<?php
/* @var $this LectureClassroomController */
/* @var $model LectureClassroom */

$this->breadcrumbs=array(
	'Lecture Classrooms'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List LectureClassroom', 'url'=>array('index')),
	array('label'=>'Create LectureClassroom', 'url'=>array('create')),
	array('label'=>'View LectureClassroom', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage LectureClassroom', 'url'=>array('admin')),
);
?>

<h1>Update LectureClassroom <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>