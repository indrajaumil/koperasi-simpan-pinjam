<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Kode_Transaksi'); ?>
		<?php echo $form->textField($model,'Kode_Transaksi',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Tgl_Transaksi'); ?>
		<?php echo $form->textField($model,'Tgl_Transaksi'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'No_BA'); ?>
		<?php echo $form->textField($model,'No_BA',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Kode_Sandi'); ?>
		<?php echo $form->textField($model,'Kode_Sandi',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Jml_SP'); ?>
		<?php echo $form->textField($model,'Jml_SP',array('size'=>19,'maxlength'=>19)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Jml_SW'); ?>
		<?php echo $form->textField($model,'Jml_SW',array('size'=>19,'maxlength'=>19)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Jml_SS'); ?>
		<?php echo $form->textField($model,'Jml_SS',array('size'=>19,'maxlength'=>19)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Saldo_SP'); ?>
		<?php echo $form->textField($model,'Saldo_SP',array('size'=>19,'maxlength'=>19)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Saldo_SW'); ?>
		<?php echo $form->textField($model,'Saldo_SW',array('size'=>19,'maxlength'=>19)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Saldo_SS'); ?>
		<?php echo $form->textField($model,'Saldo_SS',array('size'=>19,'maxlength'=>19)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Saldo'); ?>
		<?php echo $form->textField($model,'Saldo',array('size'=>19,'maxlength'=>19)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Saham'); ?>
		<?php echo $form->textField($model,'Saham'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Keterangan'); ?>
		<?php echo $form->textField($model,'Keterangan',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Printed'); ?>
		<?php echo $form->textField($model,'Printed'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PrintedX'); ?>
		<?php echo $form->textField($model,'PrintedX'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PrintedKSPA'); ?>
		<?php echo $form->textField($model,'PrintedKSPA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PrintedKSPAX'); ?>
		<?php echo $form->textField($model,'PrintedKSPAX'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Kode_Cabang'); ?>
		<?php echo $form->textField($model,'Kode_Cabang',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Created_By'); ?>
		<?php echo $form->textField($model,'Created_By',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Created_DateTime'); ?>
		<?php echo $form->textField($model,'Created_DateTime'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Created_Location'); ?>
		<?php echo $form->textField($model,'Created_Location',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->