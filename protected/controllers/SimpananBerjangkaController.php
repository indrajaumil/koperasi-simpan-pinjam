<?php

class SimpananBerjangkaController extends Controller {

    public $layout = '//layouts/column2';

    public function actionIndex() {

    }

    public function actionDaftar($No_RekeningSH="") {
        $conditions = 'No_BA="' . Yii::app()->user->getState('noBA') . '" AND Status_Sertifikat=0';
        $model = MSimpananHarian::model()->findAll(
                        array(
                            'select' => 't.No_RekeningSH',
                            'group' => 't.No_RekeningSH',
                            'condition' => 'No_BA="' . Yii::app()->user->getState('noBA') . '"',
                            'distinct' => true,
                        )
        );
        if (isset($_GET['No_RekeningSH'])) {
            $conditions .= ' AND No_RekeningSH="' . $_GET['No_RekeningSH'] . '"';
        
            $dataProvider = new CActiveDataProvider('QSimpananberjangkaSimpananharianCabang', array(
                        'criteria' => array(
                            //'with' => array('MPinjamanMSimpananBerjangka', 'MJenisMSimpananBerjangka'),
                            'condition' => $conditions,
                        ),
                        'pagination' => array(
                            'pageSize' => 20,
                        ),
                    ));
            Yii::app()->user->setState('printingDataProvide', $dataProvider);
        }
        $this->render('daftar', array(
            'dataProvider' => $dataProvider,
            'model' => $model,
        ));
    }

    public function actionRekeningKoran($No_RekeningSH="", $tanggal_awal="", $tanggal_awal="") {
        $conditions = 'MSimpHarianMSimpBerjangka.No_BA="' . Yii::app()->user->getState('noBA') . '" AND MJenisMSimpananBerjangka.Auto_Rollover=0';
        $temp = $conditions;
        $model = MSimpananHarian::model()->findAll(
                        array(
                            'select' => 't.No_RekeningSH',
                            'group' => 't.No_RekeningSH',
                            'condition' => 'No_BA="' . Yii::app()->user->getState('noBA') . '"',
                            'distinct' => true,
                        )
        );
        if (isset($_GET['No_RekeningSH'])) {
            $conditions .= ' AND SimpananBerjangkaRollover.No_RekeningSH="' . $_GET['No_RekeningSH'] . '"';
            $session['actionRekeningKoran'].=$conditions;
        }
        if ($_GET['tanggal_awal'] != "") {
            $conditions .= ' AND Tgl_Transaksi>="' . $_GET['tanggal_awal'] . '"';
            $session['actionRekeningKoran'].=$conditions;
        }
        if ($_GET['tanggal_akhir'] != "") {
            $conditions .= ' AND Tgl_Transaksi<="' . $_GET['tanggal_akhir'] . '"';
            $session['actionRekeningKoran'].=$conditions;
        }
        if(isset($_GET['No_RekeningSH']) || isset($_GET['tanggal_awal']) || isset($_GET['tanggal_akhir']))
        {
            $dataProvider = new CActiveDataProvider('TrSimpananberjangkaRollover', array(
                        'criteria' => array(
                            'with' => array('SimpananBerjangkaRollover'),
                            'condition' => $conditions,
                        ),
                        'pagination' => array(
                            'pageSize' => 20,
                        ),
                    ));
            Yii::app()->user->setState('printingDataProvide', $dataProvider);
        }
        $this->render('rekeningKoran', array(
            'dataProvider' => $dataProvider,
            'model' => $model,
        ));
    }

}

?>