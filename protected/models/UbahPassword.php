<?php
class UbahPassword extends CFormModel
{
	public $password;
	public $repassword;
	public $verifyCode;
	
	public function rules()
	{
		return array(
			array('password, repassword', 'required'),
			array('repassword', 'compare', 'compareAttribute'=>'password'),
			array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
		);
	}
	
	public function attributeLabels()
	{
		return array(
			'verifyCode'=>'Kode Verifikasi',
			'password'=>'Password baru',
			'repassword'=>'Konfirmasi Password',
		);
	}
}
?>