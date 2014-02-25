

<h1>Simpanan Saham</h1>
<?php
$this->breadcrumbs=array(
	'Simpanan Saham',
);
echo CHtml::beginForm("","get");
?>
<div class="form wide">
	<div class="row">
    	<?php echo CHtml::label('Dari Tanggal', '');?>
        <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
								'name'=>'tanggal_awal',
								'value'=>$_POST['tanggal_awal'],
								'options'=>array(
									'showAnim'=>'fold',
									'dateFormat'=>'yy-m-d'
								),
								'htmlOptions'=>array(
									'style'=>'height:20px;'
								),
							));?><div class="hint"><i>Format: yyyy/mm/dd</i></div>
    </div>
    <div class="row">
    	<?php echo CHtml::label('Sampai Tanggal', '');?>
        <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
								'name'=>'tanggal_akhir',
								'value'=>$_POST['tanggal_akhir'],
								'options'=>array(
									'showAnim'=>'fold',
									'dateFormat'=>'yy-m-d'
								),
								'htmlOptions'=>array(
									'style'=>'height:20px;'
								),
							));?><div class="hint"><i>Format: yyyy/mm/dd</i></div>
    </div>
    <div class="row">
    	<?php echo CHtml::submitButton('Cari Data');?>
    </div>
</div>
<?php 
echo CHtml::endForm();
if($dataProvider!=null)
{
	echo CHtml::link('Export PDF', $this->createUrl('cetak/simpananSaham')); 
	$this->widget('zii.widgets.grid.CGridView', array(
		'dataProvider'=>$dataProvider,
                'ajaxUpdate'=>false,
		'columns'=>array(
			array(
				'name'=>'Kode_Transaksi',
				'value'=>'$data->Kode_Transaksi',
			),
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
			array(
				'name'=>'Keterangan',
				'value'=>'$data->Keterangan',
			),
		),
	));
}
?>