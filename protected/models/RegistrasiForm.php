<?php
class RegistrasiForm extends CFormModel
{
	public $noBA;
	public $tglLahir;
	public $password;
	public $repassword;
	public $email;
	public $verifyCode;
	
	public function rules()
	{
		return array(
			array('noBA, email, tglLahir, password, repassword', 'required'),
			array('repassword', 'compare', 'compareAttribute'=>'password'),
			array('noBA', 'authenticateMember'),
			array('email', 'email'),
			array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
		);
	}
	
	public function attributeLabels()
	{
		return array(
			'verifyCode'=>'Kode Verifikasi',
			'noBA'=>'Nomor BA',
			'tglLahir'=>'Tanggal Lahir',
			'password'=>'Password',
			'repassword'=>'Konfirmasi Password',
			'email'=>'Alamat Email'
		);
	}
	
	public function authenticateMember($attribute,$params)
	{
		if(!$this->hasErrors())
		{
			$mAnggota=MAnggota::model()->find('No_BA=:No_BA', array(':No_BA'=>$_POST['RegistrasiForm']['noBA']));
			$mUserOnline=MUserOnline::model()->find('username=:No_BA', array(':No_BA'=>$_POST['RegistrasiForm']['noBA']));
			if($mAnggota==null)
			{
				$this->addError('noBA','Nomor BA tidak ditemukan.');	
			}
			else if($mAnggota->Tgl_Lahir!=$this->MySQLDate($this->tglLahir))
			{
				$this->addError('tglLahir','Tanggal lahir salah.');
			}
			else if($mUserOnline!=null)
			{
				$this->addError('noBA','Nomor BA sudah terdaftar.');
			}
		}
	}
	
	private function MySQLDate($strDate)
	{
		$_date=explode('/', $strDate);
		return $_date[2].'-'.$_date[1].'-'.$_date[0];
	}
}
?>