<?php
$this->breadcrumbs=array(
	'Tr Anggotas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TrAnggota', 'url'=>array('index')),
	array('label'=>'Manage TrAnggota', 'url'=>array('admin')),
);
?>

<h1>Create TrAnggota</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>