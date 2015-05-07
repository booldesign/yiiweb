<?php
class Category extends CActiveRecord{

	//比不可缺方法1,返回模型 yii2不需要
	public static function model($className = __CLASS__){
		return parent::model($className);
	}

	public function tableName(){
		return "{{category}}";  
	}

	public function attributeLabels(){
		return array(
			'cname'=>'栏目名称'
		);

	}

	public function rules(){
		return array(
			array('cname','required','message'=>'栏目必填'),
		);

	}

}
?>