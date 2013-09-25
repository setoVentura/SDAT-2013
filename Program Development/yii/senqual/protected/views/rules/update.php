<?php
/* @var $this RulesController */
/* @var $model Rules */

$this->breadcrumbs=array(
	'Rules'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Rules', 'url'=>array('index')),
	array('label'=>'Create Rules', 'url'=>array('create')),
	array('label'=>'View Rules', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Rules', 'url'=>array('admin')),
);
?>

<h1>Update Rules <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>