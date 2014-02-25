<?php
$this->pageTitle=Yii::app()->name . ' - Login';
?>

<h2>Login Aplikasi</h2>

<p>Untuk dapat menggunakan aplikasi, silakan login terlebih dahulu.</p>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
		<p class="hint">
			<?php echo CHtml::link('Lupa Password', $this->createUrl('site/lupapassword'));?><br />
            <?php echo CHtml::link('Registrasi Aplikasi', $this->createUrl('site/registrasi'));?>
		</p>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Login'); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
