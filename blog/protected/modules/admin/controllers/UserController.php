<?php

class UserController extends Controller
{
	public function actionPasswd()
	{
		$userModel = User::model();

		if(isset($_POST['User'])){
			$userModel->attributes = $_POST['User'];
			$userModel->validate();
		}
		p($_POST);
		$this->render('passwd',array('userModel',$userModel));
	}


}