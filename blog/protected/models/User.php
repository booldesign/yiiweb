<?php
class User extends CActiveRecord{
	public $password;
	public $password1;
	public $password2;
	
	//比不可缺方法1,返回模型 yii2不需要
	public static function model($className = __CLASS__){
		return parent::model($className);
	}

	public function tableName(){
		return "{{admin}}";  
	}

	public function rules(){
		return array(
			array('password','required','message'=>'原始密码不能为空'),
			array('password1','required','message'=>'新密码不能为空'),
			array('password2','required','message'=>'确认密码不能为空'),
			array('password2','compare','compareAttribute'=>'password1','message'=>'两次密码不相同'),
		);
	}
}
?>