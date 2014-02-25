<?php

class SimpananSahamController extends Controller {

    public $layout = '//layouts/column2';

    public function actionIndex($No_RekeningSH="", $tanggal_awal="", $tanggal_akhir="") {
        $conditions = 'No_BA="' . Yii::app()->user->getState('noBA') . '"';
        if (isset($_GET['No_RekeningSH'])) {
            $conditions .= ' AND TrMSimpananHarian.No_RekeningSH="' . $_GET['No_RekeningSH'] . '"';
        }
        if ($_GET['tanggal_awal'] != "") {
            $conditions .= ' AND Tgl_Transaksi>="' . $_GET['tanggal_awal'] . '"';
        }
        if ($_GET['tanggal_akhir'] != "") {
            $conditions .= ' AND Tgl_Transaksi<="' . $_GET['tanggal_akhir'] . '"';
        }
        if (isset($_GET['No_RekeningSH']) || isset($_GET['tanggal_awal']) || isset($_GET['tanggal_akhir']))
        {
            $dataProvider = new CActiveDataProvider('TrAnggota', array(
                        'criteria' => array(
                            'condition' => $conditions,
                            'order' => 'Tgl_Transaksi DESC',
                        ),
                        'pagination' => array(
                            'pageSize' => 20,
                        ),
                    ));
            Yii::app()->user->setState('printingDataProvide', $dataProvider);
        }
        $this->render('index', array(
            'dataProvider' => $dataProvider,
            'model' => $model,
        ));
    }

}

?>