<?php
/* @var $this LectureFacultyMemberController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Lecture Faculty Members',
);

$this->menu=array(
	array('label'=>'Create LectureFacultyMember', 'url'=>array('create')),
	array('label'=>'Manage LectureFacultyMember', 'url'=>array('admin')),
);
?>

<h1>Lecture Faculty Members</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
