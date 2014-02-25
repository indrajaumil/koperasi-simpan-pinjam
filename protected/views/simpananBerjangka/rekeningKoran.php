<h1>Rekening Koran</h1>
<?php
$this->breadcrumbs=array(
	'Rekening Koran',
);
echo CHtml::beginForm("", "get");
?>
<div class="form wide">
	<div class="row">
    	<?php echo CHtml::label('No. Rekening', '');?>
        <?php echo CHtml::dropDownList('No_RekeningSH', '', CHtml::listData($model, 'No_RekeningSH', 'No_RekeningSH'));?>
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
	echo CHtml::link('Export PDF', $this->createUrl('cetak/rekeningKoran')); 
	$this->widget('zii.widgets.grid.CGridView', array(
		'dataProvider'=>$dataProvider,
                'ajaxUpdate'=>false,
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
}
?>