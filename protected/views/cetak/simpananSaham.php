<style>
	.items{border:1px solid; font:Verdana, Geneva, sans-serif; font-size:11px; white-space:nowrap;}
	.items th{font-weight:bold; padding:4px; text-align:center; vertical-align:middle;}
	.items td{border-bottom:1px solid;border-top:1px solid; white-space:nowrap; padding:2px; margin:0}
</style>
<div class="image-container">
	<img src="images/logo.jpg" width="64">
    <h2 style="display:inline;">KOPKAR - Puspita Kencana</h2>
</div>
<div class="clear">&nbsp;</div>
<h3>Simpanan Saham</h3>
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
        ),
		array(
			'name'=>'Kode_Sandi',
			'value'=>'$data->getKodeSandi()',
			'header'=>'Jenis Transaksi'
		),
		array(
            'name'=>'Simpanan Pokok',
            'value'=>'number_format($data->Jml_SP, 0, ",", ".")',
        ),
        array(
            'name'=>'Simpanan Wajib',
            'value'=>'number_format($data->Jml_SW, 0, ",", ".")',
        ),
		array(
            'name'=>'Simpanan Sukarela',
            'value'=>'number_format($data->Jml_SS, 0, ",", ".")',
        ),
		array(
            'name'=>'Saldo Simpanan Pokok',
            'value'=>'number_format($data->Saldo_SP, 0, ",", ".")',
        ),
		array(
            'name'=>'Saldo Simpanan Wajib',
            'value'=>'number_format($data->Saldo_SW, 0, ",", ".")',
        ),
		array(
            'name'=>'Saldo Simpanan Sukarela',
            'value'=>'number_format($data->Saldo_SS, 0, ",", ".")',
        ),
		array(
            'name'=>'Saldo Total',
            'value'=>'number_format($data->Saldo, 0, ",", ".")',
        ),
		array(
            'name'=>'Saham',
            'value'=>'number_format($data->Saham, 0, ",", ".")',
        ),
    ),
));
?>