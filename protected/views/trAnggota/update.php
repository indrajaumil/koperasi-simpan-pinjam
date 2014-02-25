<?php
$this->breadcrumbs=array(
	'Tr Anggotas'=>array('index'),
	$model->Kode_Transaksi=>array('view','id'=>$model->Kode_Transaksi),
	'Update',
);

$this->menu=array(
	array('label'=>'List TrAnggota', 'url'=>array('index')),
	array('label'=>'Create TrAnggota', 'url'=>array('create')),
	array('label'=>'View TrAnggota', 'url'=>array('view', 'id'=>$model->Kode_Transaksi)),
	array('label'=>'Manage TrAnggota', 'url'=>array('admin')),
);
?>

<h1>Update TrAnggota <?php echo $model->Kode_Transaksi; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>