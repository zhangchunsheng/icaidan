<?php
/* @var $this IcdUserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Icd Users',
);

$this->menu=array(
	array('label'=>'Create IcdUser', 'url'=>array('create')),
	array('label'=>'Manage IcdUser', 'url'=>array('admin')),
);
?>

<h1>Icd Users</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
