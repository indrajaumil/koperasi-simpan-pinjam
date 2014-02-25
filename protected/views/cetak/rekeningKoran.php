<style>
	.items{border:1px solid; font:Verdana, Geneva, sans-serif; font-size:12px; white-space:nowrap;}
	.items th{font-weight:bold; padding:4px; text-align:center; vertical-align:middle;}
	.items td{border-bottom:1px solid;border-top:1px solid; white-space:nowrap; padding:2px; margin:0}
</style>
<div class="image-container">
	<img src="images/logo.jpg" width="64">
    <h2 style="display:inline;">KOPKAR - Puspita Kencana</h2>
</div>
<div class="clear">&nbsp;</div>
<h3>Daftar Simpanan Berjangka</h3>
<div>Nama Anggota: <?php echo Yii::app()->user->getState('username')?></div>
<div>Nomor BA: <?php echo Yii::app()->user->getState('noBA')?></div>
<br>
<?php 
$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
	'columns'=>array(
        array(
            'name'=>'No_RekeningSH',
            'value'=>'$data->No_RekeningSH',
        ),
		array(
            'name'=>'No_SertifikatSB',
            'value'=>'$data->No_SertifikatSB',
			'header'=>'No. Sertifikat'
        ),
		array(
            'name'=>'Jenis_Simpanan_Berjangka',
            'value'=>'$data->Jenis_Simpanan_Berjangka',
			'header'=>'Jenis Simpanan'
        ),
		array(
            'name'=>'Tgl_Transaksi',
            'value'=>'$data->Tgl_Transaksi',
			'header'=>'Tanggal Transaksi'
        ),
		array(
            'name'=>'Kode_Sandi',
            'value'=>'$data->getKodeTransaksi()',
			'header'=>'Transaksi'
        ),
		array(
            'name'=>'Debit',
            'value'=>'number_format($data->Debit, 0, ",", ".")',
        ),
		array(
            'name'=>'Kredit',
            'value'=>'number_format($data->Kredit, 0, ",", ".")',
        ),
		array(
            'name'=>'Saldo',
            'value'=>'number_format($data->Saldo, 0, ",", ".")',
        ),
		array(
            'name'=>'Keterangan',
            'value'=>'$data->Keterangan',
        ),
    ),
));
?>