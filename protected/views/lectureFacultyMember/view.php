<?php
/* @var $this LectureFacultyMemberController */
/* @var $model LectureFacultyMember */

$this->breadcrumbs=array(
	'Lecture Faculty Members'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List LectureFacultyMember', 'url'=>array('index')),
	array('label'=>'Create LectureFacultyMember', 'url'=>array('create')),
	array('label'=>'Update LectureFacultyMember', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete LectureFacultyMember', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LectureFacultyMember', 'url'=>array('admin')),
);
?>

<h1>View LectureFacultyMember #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'lecture.code',
		'lecture.name',
		'facultymember.code',
		'facultymember.name',
		'facultymember.surname',
	),
)); ?>
