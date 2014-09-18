<?php
$this->breadcrumbs=array(
	'Pcnt Contact Types',
);

$this->menu=array(
array('label'=>'Create PcntContactType','url'=>array('create')),
array('label'=>'Manage PcntContactType','url'=>array('admin')),
);
?>

<h1>Pcnt Contact Types</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
