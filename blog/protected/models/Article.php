<?php
class Article extends CActiveRecord{

	//比不可缺方法1,返回模型 yii2不需要
	public static function model($className = __CLASS__){
		return parent::model($className);
	}

	public function tableName(){
		return "{{article}}";  
	}

	public function attributeLabels(){
		return array(
			'title' => '标题',
			'type' => '类型',
			'cid' => '栏目',
			'thumb' => '标题',
			'info' => '摘要',
			'content' => '内容',
		);
	}

}
?>