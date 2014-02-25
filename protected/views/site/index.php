<?php $this->pageTitle=Yii::app()->name; ?>
<style>
.info-anggota{font-family:Tahoma, Geneva, sans-serif; font-size:11px;}
.label{background-color:#999; font-weight:bold; color:#FFF; margin:3px; border-bottom:1px #000 solid; border-right:1px #000 solid; border-top:1px solid #CCC; border-left:1px solid #CCC; vertical-align:top;}
.info-anggota td{vertical-align:top;}
.info-anggota .even{background-color:#EEE;}
.info-anggota .sub-title{color:#FFF; background-color:#333; font-weight:bold; font-size:12px;}
</style>
<h4>Selamat datang, <i><?php echo CHtml::encode(Yii::app()->user->getState('username')); ?></i></h4>
<div class="view">
	<table class="info-anggota" cellpadding="2" cellspacing="2">
    	<tr>
        	<td class="label">No. BA</td>
            <td><?= $data->No_BA?></td>
        	<td class="label">Kelompok</td>
            <td><?= $data->Nama_Sub_Unit_Kelompok?></td>
            <td class="label">Cabang</td>
            <td><?= $data->Nama_Cabang?></td>
        	<td class="label">Tanggal Masuk</td>
            <td><?= $data->Tgl_Masuk?></td>
        	<td class="label">Referensi</td>
            <td><?= $data->Referensi?></td>
        </tr>
        <tr>
        	<td colspan="10" class="sub-title">Identitas Anggota</td>
        </tr>
        <tr>
        	<td class="label">No. Identitas</td>
            <td class="even"><?= $data->No_ID?></td>
            <td align="center" rowspan="8" colspan="7"><img src="index.php?r=site/fotoAnggota" height="300" /></td>
        </tr>
        <tr>
        	<td class="label">Nama Lengkap</td>
            <td><?= $data->Nama?></td>
        </tr>
        <tr>
        	<td class="label">Tempat, Tanggal Lahir</td>
            <td><?= $data->Tempat_Lahir?>, <?= $data->Tgl_Lahir?></td>
        </tr>
        <tr>
        	<td class="label" rowspan="2">Alamat</td>
            <td class="even"><?= $data->Alamat?><?=($data->No!='')?' No.'.$data->No:''?><?=($data->RT!='')?' RT.'.$data->RT:''?><?=($data->RW!='')?' RW.'.$data->RW:''?></td>
        </tr>
        <tr>
            <td class="even"><?=($data->Kelurahan!='')?' Kel.'.$data->Kelurahan:''?><?=($data->Kecamatan!='')?' Kec.'.$data->Kecamatan:''?><?=($data->Kota!='')?' '.$data->Kota:''?></td>
        </tr>
        <tr>
        	<td class="label">Kode POS</td>
            <td><?= $data->Kode_Pos?></td>
        </tr>
        <tr>
        	<td class="label">Telp.</td>
            <td class="even"><?= $data->No_Telp?>/<?= $data->No_HP?></td>
        </tr>
        <tr>
        	<td class="label">Email</td>
            <td><?= $data->Email?></td>
        </tr>
        <tr>
        	<td colspan="10" class="sub-title">Data Simpanan dan Pinjaman</td>
        </tr>
        <tr>
        	<td class="label">Simpanan Saham</td>
            <td colspan="2">Rp. <?= number_format($row['simpananSaham'], '2', '.', ',')?></td>
        	<td class="label" colspan="2">Simpanan Berjangka</td>
            <td colspan="5">Rp. <?= number_format($row['Jml_Simpanan'], '2', '.', ',')?></td>
        </tr>
        <tr>
        	<td class="label">Simpanan Harian</td>
            <td class="even" colspan="2">Rp. <?= number_format($row['Saldo_Simpanan'], '2', '.', ',')?></td>
        	<td class="label" colspan="2">Pinjaman</td>
            <td class="even" colspan="5">Rp. <?= number_format($row['Saldo_Pinjaman'], '2', '.', ',')?></td>
        </tr>
    </table>

</div>
