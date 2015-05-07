<?php

class LoginForm extends CFormModel
{
	public $username;
	public $password;
	public $rememberMe;
	public $captcha;

private $_identity;
	public function rules()
	{
		return array(
			// username and password are required
			array('username, password', 'required'),
			// rememberMe needs to be a boolean
			array('rememberMe', 'boolean'),
			// password needs to be authenticated
			array('password', 'authenticate'),
		);
	}
}
