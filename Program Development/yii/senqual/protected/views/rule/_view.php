<?php
/* @var $this RuleController */
/* @var $data Rule */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('starts')); ?>:</b>
	<?php echo CHtml::encode($data->starts); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ends')); ?>:</b>
	<?php echo CHtml::encode($data->ends); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('discipline')); ?>:</b>
	<?php echo CHtml::encode($data->discipline); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('owner')); ?>:</b>
	<?php echo CHtml::encode($data->owner); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('property')); ?>:</b>
	<?php echo CHtml::encode($data->property); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('isPrivate')); ?>:</b>
	<?php echo CHtml::encode($data->isPrivate); ?>
	<br />

	*/ ?>

</div>