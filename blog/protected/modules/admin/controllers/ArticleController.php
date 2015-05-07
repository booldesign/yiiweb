<?php

class ArticleController extends Controller
{
	public function actionIndex()
	{
		$articleInfo = Article::model();
		$articleInfo = $articleInfo->findAllBySql("select * from {{article}}");

		$this->render('index',array('articleInfo'=>$articleInfo));
	}

	public function actionAdd(){
		$articleModel = new Article();

		$category = Category::model();
		$categoryInfo = $category->findAllBySql("select cid,cname from {{category}}");
		$cateArr = array();
		$cateArr[] = '请选择';
		foreach ($categoryInfo as $v) {
			$cateArr[$v->cid] = $v->cname;
		}


		if(isset($_POST['Article'])){
			$articleInfo->attributes = $_POST['Article'];

			if($articleInfo->save()){
				$this->redirect(array('index'));
			}
		}
		$data = array('articleModel'=>$articleModel,'cateArr'=>$cateArr);
		$this->render('add',);
	}

	public function actionEdit($cid){
		$articleInfo = Category::model();
		$articleInfo = $articleInfo->findByPk($cid); 

		if(isset($_POST['Article'])){
			// p($_POST['Category']);die;
			$articleInfo->attributes = $_POST['Category'];

			if($articleInfo->save()){
				$this->redirect(array('index'));
			}
		}

		$this->render('Edit',array('articleInfo' => $articleInfo));

	}

	public function actionDel($cid){
		$articleInfo = Category::model();

		$sql = "select aid from {{article}} where cid = $cid";
		$articleInfo = $articleInfo->findBysql($sql);

		if(is_object($articleInfo)){
			Yii::app()->user->setFlash('hasArt','栏目下面有文章，请先删除文章');
			$this->redirect(array('index'));  //注意里面是数组
		}else{
			if(Article::model()->deleteByPk($cid)){
				$this->redirect(array('index'));  //注意里面是数组
			}
		}
	}
}