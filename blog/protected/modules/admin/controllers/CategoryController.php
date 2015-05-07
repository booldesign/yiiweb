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
		P($_POST);
		if(isset($_POST['Category'])){
			$categoryModel->attributes = $_POST['Category'];

			if($categoryModel->save()){
				$this->redirect('index');
			}
		}
		$this->render('add',array('categoryModel'=>$categoryModel));
	}


}