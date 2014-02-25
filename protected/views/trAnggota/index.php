<?php
$this->breadcrumbs=array(
	'Tr Anggotas',
);

$this->menu=array(
	array('label'=>'Create TrAnggota', 'url'=>array('create')),
	array('label'=>'Manage TrAnggota', 'url'=>array('admin')),
);
?>

<h1>Tr Anggotas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
