<?php
/* @var $this FacultymemberController */
/* @var $model Facultymember */

$this->breadcrumbs=array(
	'Facultymembers'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Facultymember', 'url'=>array('index')),
	array('label'=>'Create Facultymember', 'url'=>array('create')),
	array('label'=>'Update Facultymember', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Facultymember', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Facultymember', 'url'=>array('admin')),
);
?>

<h1>View Facultymember #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'code',
		'name',
		'surname',
		'email',
		'startdate',
	),
)); ?>
