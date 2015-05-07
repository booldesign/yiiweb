<?php
class User extends CActiveRecord{
	
	//比不可缺方法1,返回模型 yii2不需要
	public static function model($className = __CLASS__){
		return parent::model($className);
	}

	public function tableName(){
		return "{{admin}}";  
	}
}
?>