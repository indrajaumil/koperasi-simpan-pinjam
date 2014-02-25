<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tr-anggota-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Kode_Transaksi'); ?>
		<?php echo $form->textField($model,'Kode_Transaksi',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'Kode_Transaksi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Tgl_Transaksi'); ?>
		<?php echo $form->textField($model,'Tgl_Transaksi'); ?>
		<?php echo $form->error($model,'Tgl_Transaksi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'No_BA'); ?>
		<?php echo $form->textField($model,'No_BA',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'No_BA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Kode_Sandi'); ?>
		<?php echo $form->textField($model,'Kode_Sandi',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'Kode_Sandi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Jml_SP'); ?>
		<?php echo $form->textField($model,'Jml_SP',array('size'=>19,'maxlength'=>19)); ?>
		<?php echo $form->error($model,'Jml_SP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Jml_SW'); ?>
		<?php echo $form->textField($model,'Jml_SW',array('size'=>19,'maxlength'=>19)); ?>
		<?php echo $form->error($model,'Jml_SW'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Jml_SS'); ?>
		<?php echo $form->textField($model,'Jml_SS',array('size'=>19,'maxlength'=>19)); ?>
		<?php echo $form->error($model,'Jml_SS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Saldo_SP'); ?>
		<?php echo $form->textField($model,'Saldo_SP',array('size'=>19,'maxlength'=>19)); ?>
		<?php echo $form->error($model,'Saldo_SP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Saldo_SW'); ?>
		<?php echo $form->textField($model,'Saldo_SW',array('size'=>19,'maxlength'=>19)); ?>
		<?php echo $form->error($model,'Saldo_SW'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Saldo_SS'); ?>
		<?php echo $form->textField($model,'Saldo_SS',array('size'=>19,'maxlength'=>19)); ?>
		<?php echo $form->error($model,'Saldo_SS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Saldo'); ?>
		<?php echo $form->textField($model,'Saldo',array('size'=>19,'maxlength'=>19)); ?>
		<?php echo $form->error($model,'Saldo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Saham'); ?>
		<?php echo $form->textField($model,'Saham'); ?>
		<?php echo $form->error($model,'Saham'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Keterangan'); ?>
		<?php echo $form->textField($model,'Keterangan',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Keterangan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Printed'); ?>
		<?php echo $form->textField($model,'Printed'); ?>
		<?php echo $form->error($model,'Printed'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PrintedX'); ?>
		<?php echo $form->textField($model,'PrintedX'); ?>
		<?php echo $form->error($model,'PrintedX'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PrintedKSPA'); ?>
		<?php echo $form->textField($model,'PrintedKSPA'); ?>
		<?php echo $form->error($model,'PrintedKSPA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PrintedKSPAX'); ?>
		<?php echo $form->textField($model,'PrintedKSPAX'); ?>
		<?php echo $form->error($model,'PrintedKSPAX'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Kode_Cabang'); ?>
		<?php echo $form->textField($model,'Kode_Cabang',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'Kode_Cabang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Created_By'); ?>
		<?php echo $form->textField($model,'Created_By',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'Created_By'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Created_DateTime'); ?>
		<?php echo $form->textField($model,'Created_DateTime'); ?>
		<?php echo $form->error($model,'Created_DateTime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Created_Location'); ?>
		<?php echo $form->textField($model,'Created_Location',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'Created_Location'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->