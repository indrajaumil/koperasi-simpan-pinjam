<!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />-->
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
            'name'=>'Jml_Simpanan',
            'value'=>'number_format($data->Jml_Simpanan, 0, ",", ".")',
        ),
		array(
            'name'=>'Jangka_Waktu',
            'value'=>'$data->Jangka_Waktu',
			'header'=>'Jangka Waktu'
        ),
		array(
            'name'=>'Suku_Bunga',
            'value'=>'number_format($data->Suku_Bunga, 0, ",", ".")',
        ),
		array(
            'name'=>'Tgl_Mulai',
            'value'=>'$data->Tgl_Mulai',
			'header'=>'Tanggal Mulai'
        ),
		array(
            'name'=>'Jatuh_Tempo_Awal',
            'value'=>'$data->Jatuh_Tempo_Awal',
			'header'=>'Jatuh Tempo Awal'
        ),
		array(
            'name'=>'Jatuh_Tempo_Sekarang',
            'value'=>'$data->Jatuh_Tempo_Sekarang',
			'header'=>'Jatuh Tempo Sekarang'
        ),
		array(
            'name'=>'Jml_Bunga',
            'value'=>'number_format($data->Jml_Bunga, 0, ",", ".")',
        ),
    ),
));
?>