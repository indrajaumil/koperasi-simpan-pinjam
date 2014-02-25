

<h1>Simpanan Saham</h1>
<?php
$this->breadcrumbs=array(
	'History Pengajuan Pinjaman',
);
echo CHtml::beginForm("", "get");
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
	//echo CHtml::link('Export PDF', $this->createUrl('cetak/his')); 
	$this->widget('zii.widgets.grid.CGridView', array(
		'dataProvider'=>$dataProvider,
                'ajaxUpdate'=>false,
		'columns'=>array(
			array(
				'name'=>'Tanggal Pengajuan',
				'value'=>'$data->tanggal_pengajuan',
			),
			array(
				'name'=>'Jumlah Pinjaman',
				'value'=>'number_format($data->jumlah_pinjaman, 0, ",", ".")',
				'header'=>'Jumlah Pinjaman'
			),
			array(
				'name'=>'Jangka Waktu (bulan)',
				'value'=>'$data->jangka_waktu',
			),
			array(
				'name'=>'Alasan Pengajuan',
				'value'=>'$data->alasan',
			),
		),
	));
}
?>