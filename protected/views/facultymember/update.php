<?php
/* @var $this FacultymemberController */
/* @var $model Facultymember */

$this->breadcrumbs=array(
	'Facultymembers'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Facultymember', 'url'=>array('index')),
	array('label'=>'Create Facultymember', 'url'=>array('create')),
	array('label'=>'View Facultymember', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Facultymember', 'url'=>array('admin')),
);
?>

<h1>Update Facultymember <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>