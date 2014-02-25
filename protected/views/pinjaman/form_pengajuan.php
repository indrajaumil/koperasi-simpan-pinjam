<?php
/*$this->pageTitle=Yii::app()->name . ' - Registrasi Aplikasi';
$this->breadcrumbs=array(
	'Registrasi',
);*/
?>
<h1>Pengajuan Pinjaman</h1>
<div class="form wide">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'registrasi-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
	<?php if($isSuccess):?>
    <p class="note">Anda berhasil melakukan pengajuan pinjaman.</p>
    <?php endif;?>
    <div class="row">
		<?php echo $form->labelEx($model,'jumlah_pinjaman'); ?>
		<?php echo $form->textField($model,'jumlah_pinjaman'); ?>
		<?php echo $form->error($model,'jumlah_pinjaman'); ?>
	</div>
    <div class="row">
		<?php echo $form->labelEx($model,'jangka_waktu'); ?>
		<?php echo $form->textField($model,'jangka_waktu'); ?>
		<?php echo $form->error($model,'jangka_waktu'); ?>
	</div>
    <div class="row">
		<?php echo $form->labelEx($model,'alasan'); ?>
		<?php echo $form->textArea($model,'alasan'); ?>
		<?php echo $form->error($model,'alasan'); ?>
	</div>
    <div class="row buttons">
        <?php echo CHtml::submitButton('Registrasi'); ?>
    </div>

<?php $this->endWidget(); ?>
</div>