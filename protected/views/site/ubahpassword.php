<?php
$this->pageTitle=Yii::app()->name . ' - Ubah Password';
$this->breadcrumbs=array(
	'Ubah Password',
);
?>

<div class="form wide">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ubah-password-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
	<?php if($isSuccess):?>
    <p class="note">Password berhasil dirubah.</p>
    <?php endif;?>
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
        <?php echo CHtml::submitButton('Ubah Password'); ?>
    </div>

<?php $this->endWidget(); ?>
</div>