<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
<style>
	.items{border:1px solid; font:Verdana, Geneva, sans-serif; font-size:12px; white-space:nowrap;}
	.items th{font-weight:bold; padding:4px; text-align:center; vertical-align:middle;}
	.items td{border-bottom:1px solid;border-top:1px solid; white-space:nowrap; padding:2px; margin:0}
</style>
<div class="image-container" style="border-bottom:#000 1px solid;">
	<img src="images/logo.jpg" width="64">
    <h2 style="display:inline;">KOPKAR - Puspita Kencana</h2>
</div>
<div class="clear">&nbsp;</div>
<h3>Daftar Pinjaman</h3>
<div>Nama Anggota: <?php echo Yii::app()->user->getState('username')?></div>
<div>Nomor BA: <?php echo Yii::app()->user->getState('noBA')?></div>
<br>
<?php 

$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
	'columns'=>array(
        array(
            'name'=>'Tanggal Transaksi',
            'value'=>'$data->Tgl_Transaksi',
			'header'=>'Tanggal Transaksi'
        ),
		array(
            'name'=>'No_Pinjaman',
            'value'=>'$data->No_Pinjaman',
			'header'=>'No. Pinjaman'
        ),
		array(
			'name'=>'Kode_Sandi',
			'value'=>'$data->getKodeSandi()',
			'header'=>'Jenis Transaksi'
		),
		array(
            'name'=>'Angsuran',
            'value'=>'number_format($data->Angsuran, 0, ",", ".")',
        ),
		array(
            'name'=>'Bunga',
            'value'=>'number_format($data->Bunga, 0, ",", ".")',
        ),
		array(
            'name'=>'Denda',
            'value'=>'number_format($data->Denda, 0, ",", ".")',
        ),
		array(
            'name'=>'Saldo',
            'value'=>'number_format($data->Saldo, 0, ",", ".")',
        ),
		array(
            'name'=>'Bunga_Kurang',
            'value'=>'number_format($data->Bunga_Kurang, 0, ",", ".")',
        ),
		array(
            'name'=>'Keterangan',
            'value'=>'$data->Keterangan',
        ),
    ),
));
?>