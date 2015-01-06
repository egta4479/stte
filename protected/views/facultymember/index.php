<?php
/* @var $this FacultymemberController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Facultymembers',
);

$this->menu=array(
	array('label'=>'Create Facultymember', 'url'=>array('create')),
	array('label'=>'Manage Facultymember', 'url'=>array('admin')),
);
?>

<h1>Facultymembers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
