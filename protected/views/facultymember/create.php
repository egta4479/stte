<?php
/* @var $this FacultymemberController */
/* @var $model Facultymember */

$this->breadcrumbs=array(
	'Facultymembers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Facultymember', 'url'=>array('index')),
	array('label'=>'Manage Facultymember', 'url'=>array('admin')),
);
?>

<h1>Create Facultymember</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>