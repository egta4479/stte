<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		$users=array(
			// username => password
			'admin'=>md5('admin'),
		);

		

		/*if(!isset($users[$this->username]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;*/
		if(isset($users[$this->username]))
		{

			if($users[$this->username]==md5($this->password))
			{
				$this->setState('role', 'admin');
				$this->errorCode=self::ERROR_NONE;
			}
			else
			{
				$this->errorCode=self::ERROR_PASSWORD_INVALID;
			}
		}
		else
		{
				$user = Student::model()->findByAttributes(array('code'=>$this->username,'password'=>md5($this->password)));
				if($user){
					$this->setState('role', 'student');
					$this->errorCode=self::ERROR_NONE;
				}
				else
				{
					$this->errorCode=self::ERROR_PASSWORD_INVALID;
				}
		}
		return !$this->errorCode;
	}
}