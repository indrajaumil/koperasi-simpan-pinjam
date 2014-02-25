<?php

class PinjamanController extends Controller {

    public $layout = '//layouts/column2';

    public function actionIndex($No_Pinjaman="", $tanggal_awal="", $tanggal_akhir="") {
        $conditions = 'TrMPinjaman.No_BA="' . Yii::app()->user->getState('noBA') . '"';
        $temp = $conditions;
        $model = MPinjaman::model()->findAll(
                        array(
                            'select' => 't.No_Pinjaman',
                            'group' => 't.No_Pinjaman',
                            'condition' => 'No_BA="' . Yii::app()->user->getState('noBA') . '"',
                            'distinct' => true,
                        )
        );
        if (isset($_GET['No_Pinjaman'])) {
            $conditions .= ' AND TrMPinjaman.No_Pinjaman="' . $_GET['No_Pinjaman'] . '"';
            $session['pinjaman'].=$conditions;
        }
        if ($_GET['tanggal_awal'] != "") {
            $conditions .= ' AND Tgl_Transaksi>="' . $_GET['tanggal_awal'] . '"';
            $session['pinjaman'].=$conditions;
        }
        if ($_GET['tanggal_akhir'] != "") {
            $conditions .= ' AND Tgl_Transaksi<="' . $_GET['tanggal_akhir'] . '"';
            $session['pinjaman'].=$conditions;
        }
        if(isset($_GET['No_Pinjaman']) || isset($_GET['tanggal_awal']) || isset($_GET['tanggal_akhir']))
        {
            $dataProvider = new CActiveDataProvider('TrPinjaman', array(
                        'criteria' => array(
                            'with' => array('TrMPinjaman'),
                            'condition' => $conditions,
                        /* 'order'=>'rMSimpananHarian.Tgl_Transaksi DESC', */
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

    public function actionPengajuanPinjaman() {
        $model = new MFormPengajuan;
        $user = MUserOnline::model()->find("username = '" . Yii::app()->user->getState('noBA') . "'");
        if (isset($_POST['MFormPengajuan'])) {
            $_POST['MFormPengajuan']['No_BA'] = Yii::app()->user->getState('noBA');
            $_POST['MFormPengajuan']['tanggal_pengajuan'] = date('Y-m-d');
            $model->attributes = $_POST['MFormPengajuan'];
            if ($model->save(false)) {
                $message = $this->renderPartial('email_template', array('model' => $model), true);
                $mail = new YiiMailer('template', array('message' => $message, 'name' => 'Kopkar Puspita Kencana', 'description' => 'Registrasi'));
                //render HTML mail, layout is set from config file or with $mail->setLayout('layoutName')
                $mail->render();
                //set properties as usually with PHPMailer
                $mail->From = 'no-reply@kopkar-puspitakencana.com';
                $mail->FromName = 'Kopkar Puspita Kencana';
                $mail->Subject = 'Registrasi Kopkar Puspita Kencana';
                $mail->AddAddress($user->email);
                $mail->AddAddress("ahmad.aminudin@gmail.com");
                $this->render('form_pengajuan', array('model' => $model, 'isSuccess' => true));
                die();
            }
        }
        $this->render('form_pengajuan', array(
            'model' => $model,
            'isSuccess' => false
        ));
    }

    public function actionHistoryPengajuan($tanggal_awal="", $tanggal_akhir="") {
        $conditions = 'No_BA="' . Yii::app()->user->getState('noBA') . '"';
        $temp = $conditions;
        if ($_GET['tanggal_awal'] != "") {
            $conditions .= ' AND tanggal_pengajuan>="' . $_GET['tanggal_awal'] . '"';
        }
        if ($_GET['tanggal_akhir'] != "") {
            $conditions .= ' AND tanggal_pengajuan<="' . $_GET['tanggal_akhir'] . '"';
        }
        if(isset($_GET['tanggal_awal']) || isset($_GET['tanggal_akhir']))
        {
            $dataProvider = new CActiveDataProvider('MFormPengajuan', array(
                        'criteria' => array(
                            'condition' => $conditions,
                            'order' => 'tanggal_pengajuan DESC',
                        ),
                        'pagination' => array(
                            'pageSize' => 20,
                        ),
                    ));
            Yii::app()->user->setState('printingDataProvide', $dataProvider);
        }
        $this->render('history_pengajuan', array(
            'dataProvider' => $dataProvider,
        ));
    }

}

?>