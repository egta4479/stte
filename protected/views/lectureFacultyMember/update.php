<?php
/* @var $this LectureFacultyMemberController */
/* @var $model LectureFacultyMember */

$this->breadcrumbs=array(
	'Lecture Faculty Members'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List LectureFacultyMember', 'url'=>array('index')),
	array('label'=>'Create LectureFacultyMember', 'url'=>array('create')),
	array('label'=>'View LectureFacultyMember', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage LectureFacultyMember', 'url'=>array('admin')),
);
?>

<h1>Update LectureFacultyMember <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>