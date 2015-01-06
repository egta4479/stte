<?php
/* @var $this LectureClassroomController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Lecture Classrooms',
);

$this->menu=array(
	array('label'=>'Create LectureClassroom', 'url'=>array('create')),
	array('label'=>'Manage LectureClassroom', 'url'=>array('admin')),
);
?>

<h1>Lecture Classrooms</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
