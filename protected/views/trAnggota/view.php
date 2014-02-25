<?php
$this->breadcrumbs=array(
	'Tr Anggotas'=>array('index'),
	$model->Kode_Transaksi,
);

$this->menu=array(
	array('label'=>'List TrAnggota', 'url'=>array('index')),
	array('label'=>'Create TrAnggota', 'url'=>array('create')),
	array('label'=>'Update TrAnggota', 'url'=>array('update', 'id'=>$model->Kode_Transaksi)),
	array('label'=>'Delete TrAnggota', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Kode_Transaksi),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TrAnggota', 'url'=>array('admin')),
);
?>

<h1>View TrAnggota #<?php echo $model->Kode_Transaksi; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Kode_Transaksi',
		'Tgl_Transaksi',
		'No_BA',
		'Kode_Sandi',
		'Jml_SP',
		'Jml_SW',
		'Jml_SS',
		'Saldo_SP',
		'Saldo_SW',
		'Saldo_SS',
		'Saldo',
		'Saham',
		'Keterangan',
		'Printed',
		'PrintedX',
		'PrintedKSPA',
		'PrintedKSPAX',
		'Kode_Cabang',
		'Created_By',
		'Created_DateTime',
		'Created_Location',
	),
)); ?>
