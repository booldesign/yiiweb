<?php

class LoginController extends Controller
{
	public function actionIndex()
	{
		// $userInfo = User::model()->find('username=:name',array(':name'=>'admin'));
		// p($userInfo->password);die;
		$loginForm = new LoginForm();
// print_r($_POST);die;
		if(isset($_POST['LoginForm'])){
			$loginForm->attributes = $_POST['LoginForm'];

			if($loginForm->validate() && $loginForm->login()){
				Yii::app()->session['login'] = time();
				$this->redirect(array('default/index'));
			}
		}
		$this->render('index',array('loginForm'=>$loginForm));
	}

		/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				//'class'=>'CCaptchaAction',
				'class'=>'system.web.widgets.captcha.CCaptchaAction',
				'height'=>25,
				'width'=>80,
				'minLength'=>4,
				'maxLength'=>4,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	public function actionOut(){
		Yii::app()->user->logout();
		$this->redirect(array('index'));
	}
}