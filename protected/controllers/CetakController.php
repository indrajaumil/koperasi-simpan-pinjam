<?php
Yii::import('application.vendors.*');
require_once('dompdf/dompdf_config.inc.php');
spl_autoload_unregister(array('YiiBase','autoload'));
// this makes the php engine unhappy, likely incorrect syntax
//spl_autoload_register(array('DOMPDF_autoload','autoload'));
spl_autoload_register(array('YiiBase','autoload'));

class CetakController extends Controller
{
	public $layout='//clean';
	public function actionIndex()
	{
		
	}
	
	public function actionPinjaman()
	{
		$dataProvider=new CActiveDataProvider('TrPinjaman', array(
												'criteria'=>array(
													'with' => array('TrMPinjaman'),
													'condition'=>'TrMPinjaman.No_BA="'.Yii::app()->user->getState('noBA').'"',
													/*'order'=>'rMSimpananHarian.Tgl_Transaksi DESC',*/
												),
												'pagination'=>array(
													'pageSize'=>20,
												),
											));
		$html =	$this->renderPartial('pinjaman', array('dataProvider'=>$dataProvider, 'logo'=>$logo), true, true);
		//echo $html;
		$dompdf = new DOMPDF();
		$dompdf->set_paper('a4', 'landscape');
		$dompdf->base_path = Yii::app()->request->baseUrl;
		$dompdf->load_html($html);
		$dompdf->render();
		$dompdf->stream("Pinjaman.pdf");
	}
	
	public function actionSimpananSaham()
	{
		$dataProvider=new CActiveDataProvider('TrAnggota', array(
												'criteria'=>array(
													'condition'=>'No_BA="'.Yii::app()->user->getState('noBA').'"',
													'order'=>'Tgl_Transaksi DESC',
												),
												'pagination'=>array(
													'pageSize'=>20,
												),
											));

		$html =	$this->renderPartial('simpananSaham', array('dataProvider'=>$dataProvider), true, true);
		$dompdf = new DOMPDF();
		$dompdf->set_paper('a4', 'landscape');
		//$dompdf->base_path = Yii::app()->request->baseUrl;
		$dompdf->load_html($html);
		$dompdf->render();
		$dompdf->stream("Simpanan Saham.pdf");
	}
	
	public function actionSimpananHarian()
	{
		$dataProvider=Yii::app()->user->getState('printingDataProvide');
		$html =	$this->renderPartial('simpananHarian', array('dataProvider'=>$dataProvider), true, true);
		$dompdf = new DOMPDF();
		$dompdf->set_paper('a4', 'landscape');
		//$dompdf->base_path = Yii::app()->request->baseUrl;
		$dompdf->load_html($html);
		$dompdf->render();
		$dompdf->stream("Simpanan Harian.pdf");
	}
	
	public function actionDaftarSimpananBerjangka()
	{
		$dataProvider=Yii::app()->user->getState('printingDataProvide');
		$html =	$this->renderPartial('daftarSimpananBerjangka', array('dataProvider'=>$dataProvider), true, true);
		$dompdf = new DOMPDF();
		//$dompdf->base_path = Yii::app()->request->baseUrl;
		$dompdf->set_paper('a4', 'landscape');
		$dompdf->load_html($html);
		$dompdf->render();
		$dompdf->stream("Daftar Simpanan Berjangka.pdf");
	}
	
	public function actionRekeningKoran()
	{
		$dataProvider=Yii::app()->user->getState('printingDataProvide');
		$html =	$this->renderPartial('rekeningKoran', array('dataProvider'=>$dataProvider), true, true);
		$dompdf = new DOMPDF();
		//$dompdf->base_path = Yii::app()->request->baseUrl;
		//$dompdf->set_paper('a4', 'landscape');
		$dompdf->load_html($html);
		$dompdf->render();
		$dompdf->stream("Rekening Koran.pdf");
	}
}
?>