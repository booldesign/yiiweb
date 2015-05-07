<?php

class CategoryController extends Controller
{
	public function actionIndex()
	{
		$categoryModel = Category::model();
		$categoryInfo = $categoryModel->findAllBySql("select cid,cname from {{category}}");

		$this->render('index',array('categoryInfo'=>$categoryInfo));
	}

	public function actionAdd(){
		$categoryModel = new Category();

		if(isset($_POST['Category'])){
			$categoryModel->attributes = $_POST['Category'];

			if($categoryModel->save()){
				$this->redirect(array('index'));
			}
		}
		$this->render('add',array('categoryModel'=>$categoryModel));
	}

	public function actionEdit($cid){
		$categoryModel = Category::model();
		$categoryInfo = $categoryModel->findByPk($cid); 

		if(isset($_POST['Category'])){
			// p($_POST['Category']);die;
			$categoryInfo->attributes = $_POST['Category'];

			if($categoryInfo->save()){
				$this->redirect(array('index'));
			}
		}

		$this->render('Edit',array('categoryModel' => $categoryInfo));

	}

	public function actionDel($cid){
		$categoryModel = Category::model();

		$sql = "select aid from {{article}} where cid = $cid";
		$articleInfo = $articleModel->findBysql($sql);

		if(is_object($articleInfo)){
			Yii::app()->user->setFlash('hasArt','栏目下面有文章，请先删除文章');
			$this->redirect(array('index'));  //注意里面是数组
		}else{
			if(Category::model()->deleteByPk($cid)){
				$this->redirect(array('index'));  //注意里面是数组
			}
		}
	}
}