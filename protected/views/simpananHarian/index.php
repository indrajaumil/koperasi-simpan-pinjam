

<h1>Simpanan Harian</h1>
<?php
$this->breadcrumbs=array(
	'Simpanan Harian',
);

echo CHtml::beginForm("", "get");
?>
<div class="form wide">
	<div class="row">
    	<?php echo CHtml::label('No. Rekening', '');?>
        <?php echo CHtml::dropDownList('No_RekeningSH', $_POST['No_RekeningSH'], CHtml::listData($model, 'No_RekeningSH', 'No_RekeningSH'));?>
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
	echo CHtml::link('Export PDF', $this->createUrl('cetak/simpananHarian')); 
	$this->widget('zii.widgets.grid.CGridView', array(
		'dataProvider'=>$dataProvider,
                'ajaxUpdate'=>false,
		'columns'=>array(
			array(
				'name'=>'Tanggal Transaksi',
				'value'=>'$data->Tgl_Transaksi',
				'header'=>'Tanggal Transaksi'
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
				'value'=>'$data->getKodeSandi()." ".$data->Keterangan',
			),
		),
	));
}
?>