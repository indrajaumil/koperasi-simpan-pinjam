<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
    

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div>
    	<?php if(!Yii::app()->user->isGuest):?>
		<?php $this->widget('ext.emenu.EMenu',array(
			'items'=>array(
				array('label'=>'Info Anggota', 'url'=>array('/site/index')),
				array('label'=>'Simpanan Saham', 'url'=>array('/simpananSaham')),
				array('label'=>'Simpanan Harian', 'url'=>array('/simpananHarian')),
				array('label'=>'Simpanan Berjangka', 'url'=>'#', 'items'=>array(
					array('label'=>'Daftar Simpanan Berjangka', 'url'=>array('simpananBerjangka/daftar')),
					array('label'=>'Rekening Koran', 'url'=>array('simpananBerjangka/rekeningKoran')),
				)),
				array('label'=>'Pinjaman', 'url'=>array('/pinjaman'), 'items'=>array(
					array('label'=>'Pinjaman', 'url'=>array('/pinjaman')),
					array('label'=>'Pengajuan', 'url'=>array('/pinjaman/PengajuanPinjaman')),
					array('label'=>'History Pengajuan', 'url'=>array('/pinjaman/HistoryPengajuan')),
				)),
				array('label'=>'Ubah Password', 'url'=>array('/site/ubahPassword')),
				array('label'=>'Logout ('.Yii::app()->user->getState('username').')', 'url'=>array('/site/logout'))
			),
			'theme'=>'vimeo',
		)); 
		?>
        <?php endif?>
	</div><!-- mainmenu -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
    <br /><br />
    <?php //if(!Yii::app()->user->isGuest):?>
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
    <?php //endif?>

	<?php echo $content; ?>

	<div id="footer">
		Copyright &copy; 2012 by Koperasi Karyawan Puspita Kencana.<br/>
		All Rights Reserved.<br/>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>