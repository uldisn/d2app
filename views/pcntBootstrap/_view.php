<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('pcnt_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pcnt_id),array('view','id'=>$data->pcnt_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pcnt_name')); ?>:</b>
	<?php echo CHtml::encode($data->pcnt_name); ?>
	<br />


</div>