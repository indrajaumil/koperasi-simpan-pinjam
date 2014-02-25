<?php
$this->pageTitle=Yii::app()->name . ' - Registrasi Aplikasi';
$this->breadcrumbs=array(
	'Registrasi',
);
?>

<div class="form wide">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'registrasi-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
	<?php if($isSuccess):?>
    <p class="note">Registrasi berhasil, silakan <?php echo CHtml::link('Login', $this->createUrl('site/login'));?> untuk menggunakan aplikasi.</p>
    <?php endif;?>
	<div class="row">
		<?php echo $form->labelEx($model,'noBA'); ?>
		<?php echo $form->textField($model,'noBA',array('size'=>12,'maxlength'=>10)); ?><div class="hint"><i>di isikan dengan nomor BA</i></div>
		<?php echo $form->error($model,'noBA'); ?>
	</div>
    <div class="row">
    	<?php echo $form->labelEx($model,'tglLahir'); ?>
    	<?php
		$this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model'=>$model,
			'attribute'=>'tglLahir',
			'options'=>array(
				'showAnim'=>'fold',
				'dateFormat'=>'dd/mm/yy'
			),
			'htmlOptions'=>array(
				'style'=>'height:20px;'
			),
		));
		?><div class="hint"><i>Format: dd/mm/yyyy</i></div>
        <?php echo $form->error($model,'tglLahir'); ?>
    </div>
    <div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>
    <div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>
    <div class="row">
		<?php echo $form->labelEx($model,'repassword'); ?>
		<?php echo $form->passwordField($model,'repassword'); ?>
		<?php echo $form->error($model,'repassword'); ?>
	</div>
    <?php if(CCaptcha::checkRequirements()): ?>
	<div class="row">
		<?php echo $form->labelEx($model,'verifyCode'); ?>
		<div>
		<?php $this->widget('CCaptcha'); ?>
		<?php echo $form->textField($model,'verifyCode'); ?>
		</div>
		<div class="hint">Silakan masukan huruf-huruf yang tertampil diatas.</div>
		<?php echo $form->error($model,'verifyCode'); ?>
	</div>
	<?php endif; ?>
    <div class="row buttons">
        <?php echo CHtml::submitButton('Registrasi'); ?>
    </div>

<?php $this->endWidget(); ?>
</div>