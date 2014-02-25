

<h1>Pinjaman</h1>
<?php
$this->breadcrumbs=array(
	'Pinjaman',
);
echo CHtml::beginForm();
?>
<div class="form wide">
	<div class="row">
    	<?php echo CHtml::label('No. Pinjaman', '');?>
        <?php echo CHtml::dropDownList('No_Pinjaman', $_POST['No_Pinjaman'], CHtml::listData($model, 'No_Pinjaman', 'No_Pinjaman'));?>
    </div>
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
	echo CHtml::link('Export PDF', $this->createUrl('cetak/pinjaman')); 
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
}
?>