<?php

class SiteController extends Controller {

    /**
     * Declares class-based actions.
     */
    public function actions() {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex() {
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        if (!Yii::app()->user->isGuest) {
            $model = QAnggotaTipeCabang::model()->find('No_BA=:No_BA', array(':No_BA' => Yii::app()->user->getState('noBA')));
            /* $criteria=new CDbCriteria;
              $criteria->select='t.AA_Saldo_SP, t.AA_Saldo_SW, t.AA_Saldo_SS, SUM(MAnggotaMSimpananHarian.Saldo_Simpanan) as Saldo_Simpanan, SUM(MAnggotaMPinjaman.Saldo_Pinjaman) as Saldo_Pinjaman';
              $criteria->condition='t.No_BA=:No_BA AND MAnggotaMSimpananHarian.Status_Rekening=0 AND MAnggotaMPinjaman.Status_Pinjaman=0';
              $criteria->params=array(':No_BA'=>Yii::app()->user->getState('noBA'));
              $criteria->with=array('MAnggotaMSimpananHarian', 'MAnggotaMPinjaman', 'MAnggotaTrAnggota');
              $dataSimpanan=MAnggota::model()->find($criteria);

              $criteria=new CDbCriteria;
              $criteria->condition='MSimpHarianMSimpBerjangka.No_BA=:No_BA';
              $criteria->params=array(':No_BA'=>Yii::app()->user->getState('noBA'));
              $criteria->with=array('MSimpHarianMSimpBerjangka');
              $dataPinjaman=MSimpananberjangka::model()->find($criteria); */
            /*
              $sql='select (a.AA_Saldo_SP + a.AA_Saldo_SW + a.AA_Saldo_SS) as simpananSaham,
              b.Saldo_Simpanan, sum(c.Jml_Simpanan) as Jml_Simpanan, d.Saldo_Pinjaman
              from m_anggota a
              left join m_simpananharian b on a.No_BA=b.No_BA and b.Status_Rekening=0
              left join m_simpananberjangka c on b.No_RekeningSH=c.No_RekeningSH  and c.Status_Sertifikat=0
              left join m_pinjaman d on a.No_BA=d.No_BA and d.Status_Pinjaman=0
              where a.No_BA="'.Yii::app()->user->getState('noBA').'"';
             */
            $sql = 'select (a.AA_Saldo_SP + a.AA_Saldo_SW + a.AA_Saldo_SS) as simpananSaham,
									sum(b.Saldo_Simpanan) Saldo_Simpanan, sum(c.Jml_Simpanan) as Jml_Simpanan,
									(select sum(Saldo_Pinjaman) from m_pinjaman where No_BA="' . Yii::app()->user->getState('noBA') . '" and Status_Pinjaman=0) Saldo_Pinjaman
					from m_anggota a
					left join m_simpananharian b on a.No_BA=b.No_BA and b.Status_Rekening=0
					left join m_simpananberjangka c on b.No_RekeningSH=c.No_RekeningSH  and c.Status_Sertifikat=0
					where a.No_BA="' . Yii::app()->user->getState('noBA') . '"';
            $connection = Yii::app()->db;
            $command = $connection->createCommand($sql);
            $row = $command->queryRow();

            $this->render('index', array('data' => $model, /* 'dataSimpanan'=>$dataSimpanan, 'dataPinjaman'=>$dataPinjaman, */'row' => $row));
        } else {
            $this->redirect('index.php?r=site/login');
        }
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    /**
     * Displays the contact page
     */
    public function actionContact() {
        $model = new ContactForm;
        if (isset($_POST['ContactForm'])) {
            $model->attributes = $_POST['ContactForm'];
            if ($model->validate()) {
                $headers = "From: {$model->email}\r\nReply-To: {$model->email}";
                mail(Yii::app()->params['adminEmail'], $model->subject, $model->body, $headers);
                Yii::app()->user->setFlash('contact', 'Thank you for contacting us. We will respond to you as soon as possible.');
                $this->refresh();
            }
        }
        $this->render('contact', array('model' => $model));
    }

    public function actionFotoAnggota() {
        $model = MAnggota::model()->find('No_BA=:No_BA', array(':No_BA' => Yii::app()->user->getState('noBA')));
        $this->render('foto', array('model' => $model));
    }

    public function actionLogo() {
        $model = MCreditunion::model()->find('No_BA_Puskopdit="00025"');
        $this->render('logo', array('model' => $model));
    }

    /**
     * Displays the login page
     */
    public function actionLogin() {
        $model = new LoginForm;

        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login())
                $this->redirect(Yii::app()->user->returnUrl);
        }
        // display the login form
        $this->render('login', array('model' => $model));
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout() {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }

    public function actionRegistrasi() {
        $model = new RegistrasiForm;
        if (isset($_POST['RegistrasiForm'])) {
            $model->attributes = $_POST['RegistrasiForm'];
            if ($model->validate()) {
                $mUserOnline = new MUserOnline;
                $password = $_POST['RegistrasiForm']['password'];
                $_POST['RegistrasiForm']['password'] = md5($_POST['RegistrasiForm']['password']);
                $_POST['RegistrasiForm']['username'] = $_POST['RegistrasiForm']['noBA'];
                $mUserOnline->attributes = $_POST['RegistrasiForm'];
                if ($mUserOnline->save()) {
                    $message = '<p>Selamat Anda telah berhasil melakukan registrasi pada Aplikasi KOPKAR Puspita Kencana. Anda dapat login kedalam Aplikasi dengan menggunakan:</p>';
                    $message.= 'Username: ' . $_POST['RegistrasiForm']['noBA'] . '<br>';
                    $message.= 'Password: ' . $password . '<br><br><br>';
                    $message.= 'Terima kasih<br>KOPKAR Puspita Kencana';
                    $mail = new YiiMailer('template', array('message' => $message, 'name' => 'Kopkar Puspita Kencana', 'description' => 'Registrasi'));
                    //render HTML mail, layout is set from config file or with $mail->setLayout('layoutName')
                    $mail->render();
                    //set properties as usually with PHPMailer
                    $mail->From = 'no-reply@kopkar-puspitakencana.com';
                    $mail->FromName = 'Kopkar Puspita Kencana';
                    $mail->Subject = 'Registrasi Kopkar Puspita Kencana';
                    $mail->AddAddress($_POST['RegistrasiForm']['email']);
                    $this->render('registrasi', array('model' => $model, 'isSuccess' => true));
                    $mail->Send();
                }
            }
        }
        $this->render('registrasi', array('model' => $model));
    }
    protected function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $randomString;
    }
    public function actionLupapassword() {
        if (isset($_POST['email'])) {
            $mUserOnline = MUserOnline::model()->find('email=:email', array(':email' => $_POST['email']));
            if (count($mUserOnline) > 0) {
                $password = $this->generateRandomString();
                
                $mUserOnline->password = md5($password);
                $mUserOnline->save(); 
                $message = '<p>Anda baru saja menggunakan fungsi lupa password, berikut adalah password Anda:</p>';
                $message.= 'Password: ' . $password . '<br><br><br>';
                $message.= 'Terima kasih<br>Koperasi Karyawan - Puspita Kencana';
                $mail = new YiiMailer('template', array('message' => $message, 'name' => 'Kopkar Puspita Kencana', 'description' => 'Lupa Password'));
                //render HTML mail, layout is set from config file or with $mail->setLayout('layoutName')
                $mail->render();
                //set properties as usually with PHPMailer
                $mail->From = 'no-reply@kopkar-puspitakencana.com';
                $mail->FromName = 'Kopkar Puspita Kencana';
                $mail->Subject = 'Lupa Password Kopkar Puspita Kencana';
                $mail->AddAddress($_POST['email']);
                if ($mail->Send()) {
                    $mail->ClearAddresses();
                    Yii::app()->user->setFlash('success', "Password Anda sudah dikirim ke email Anda ".$_POST['email']." Klik <a href='" . $this->createUrl('site/login') . "'>di sini</a> untuk kembali ke halaman login.");
                } else {
                    Yii::app()->user->setFlash('error', 'Error while sending email: ' . $mail->ErrorInfo);
                }
                
            } else {
                Yii::app()->user->setFlash('error', "Email yang anda masukkan tidak terdaftar.");
            }
        }
        $this->render('lupapassword');
    }

    public function actionUbahpassword() {
        $model = new UbahPassword;
        if (isset($_POST['UbahPassword'])) {
            /* if($model->validate())
              { */
            $mUserOnline = MUserOnline::model()->find('username=:noBA', array('noBA' => Yii::app()->user->getState('noBA')));
            $_POST['UbahPassword']['password'] = md5($_POST['UbahPassword']['password']);
            $mUserOnline->attributes = $_POST['UbahPassword'];
            if ($mUserOnline->save()) {
                $this->render('ubahpassword', array('model' => $model, 'isSuccess' => true));
                exit;
            }
            /* } */
        }
        $this->render('ubahpassword', array('model' => $model));
    }

    public function actionPaging() {
        $session = new CHttpSession;
        $session->open();
        die(print_r($session));
        if ($_POST) {
            $condition = 'Tgl_Masuk="1982-09-26"';
        }
        $data = new CActiveDataProvider('MAnggota',
                        array('pagination' => array('pageSize' => 5),
                            'criteria' => array(
                                'condition' => $condition
                        ))
        );
        $this->render('paging', array('data' => $data));
    }

    public function actionSendMail() {
        $message = 'Testing send email on Kopkar Puspita Kencana<br>';
        $message.= 'Terima kasih<br>Koperasi Karyawan - Puspita Kencana';
        $mail = new YiiMailer('template', array('message' => $message, 'name' => 'Kopkar Puspita Kencana', 'description' => 'Test Mail'));
        //render HTML mail, layout is set from config file or with $mail->setLayout('layoutName')
        $mail->render();
        //set properties as usually with PHPMailer
        $mail->From = 'no-reply@kopkar-puspitakencana.com';
        $mail->FromName = 'Kopkar Puspita Kencana';
        $mail->Subject = 'Kopkar Puspita Kencana';
        $mail->AddAddress('me@aminudin.net');
        $mail->AddAddress('indrajaumil@gmail.com');
        //send
        if ($mail->Send()) {
            $mail->ClearAddresses();
            Yii::app()->user->setFlash('contact', 'Thank you for contacting us. We will respond to you as soon as possible.');
        } else {
            Yii::app()->user->setFlash('error', 'Error while sending email: ' . $mail->ErrorInfo);
        }
    }

}