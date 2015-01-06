<?php
/* @var $this LectureFacultyMemberController */
/* @var $model LectureFacultyMember */

$this->breadcrumbs=array(
	'Lecture Faculty Members'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LectureFacultyMember', 'url'=>array('index')),
	array('label'=>'Manage LectureFacultyMember', 'url'=>array('admin')),
);
?>

<h1>Create LectureFacultyMember</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>