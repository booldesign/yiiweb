<?php

class UserController extends Controller
{
	public function actionPasswd()
	{
		$userModel = User::model();
		$userInfo = $userModel->find("username=:name",array(':name'=>Yii::app()->user->name));
		if(isset($_POST['User'])){
			$userModel->attributes = $_POST['User'];
			if($userModel->validate()){
				$password = md5($_POST['User']['password1']);
				if($userModel->updateByPk($userInfo->uid, array('password'=>$password))){
					Yii::app()->user->setFlash('success','修改密码成功');
				}
			}
		}
		p($_POST);
		$this->render('passwd',array('userModel',$userModel));
	}


}