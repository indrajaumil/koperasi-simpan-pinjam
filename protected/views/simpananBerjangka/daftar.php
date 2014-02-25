<h1>Daftar Simpanan Berjangka</h1>
<?php
$this->breadcrumbs=array(
	'Daftar Simpanan Berjangka',
);
echo CHtml::beginForm("", "get");
?>
<div class="form wide">
	<div class="row">
    	<?php echo CHtml::label('No. Rekening', '');?>
        <?php echo CHtml::dropDownList('No_RekeningSH', '', CHtml::listData($model, 'No_RekeningSH', 'No_RekeningSH'));?>
    </div>
    <div class="row">
    	<?php echo CHtml::submitButton('Cari Data');?>
    </div>
</div>
<?php 
echo CHtml::endForm();

echo CHtml::link('Export PDF', $this->createUrl('cetak/daftarSimpananBerjangka')); 
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