<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	//public $noBA;
	public function authenticate()
	{
		$mUserOnline=MUserOnline::model()->find('username=:No_BA', array(':No_BA'=>$_POST['LoginForm']['username']));
		if($mUserOnline==null)
		{
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		}
		else if($mUserOnline->password!==md5($this->password))
		{
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		}
		else
		{
			$mAnggota=MAnggota::model()->find('No_BA=:No_BA', array(':No_BA'=>$_POST['LoginForm']['username']));
			$this->setState('username', $mAnggota->Nama);
			$this->setState('noBA', $_POST['LoginForm']['username']);
			$this->errorCode=self::ERROR_NONE;
		}
		return !$this->errorCode;
	}
}