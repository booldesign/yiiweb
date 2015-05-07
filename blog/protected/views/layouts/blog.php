<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>后盾网文章管理系统</title>
<link href="<?php echo Yii::app()->request->baseUrl ?>/assets/index/css/common.css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/assets/index/js/index.js"></script>
</head>
<body>
	<div id="top">

	</div>
	<div id="header">
		<div class='logo'>
			
		</div>
		<div class='navigation'>
			<a href="<?php echo $this->createUrl('index/index'); ?>">首页</a>
			<a href="<?php echo $this->createUrl('category/index'); ?>">分类</a>
			<a href="<?php echo $this->createUrl('article/index'); ?>">详情</a>
			<a href="">首页</a>
		</div>
	</div>
	<?php echo $content; ?>
		<div class='sidebar'>
			<div class='item'>
				<h2>最新文章</h2>
				<ul class='flink'>
					<li><a href="">打乱缠绵</a></li>
					<li><a href="">笑容不见</a></li>
					<li><a href="">恍然如梦</a></li>
					<li><a href="">不泣离别</a></li>
				</ul>
			</div>
			
		</div>
	</div>

	<div id="footer">
		<div class='bgbar'></div>
		<div class='bottom'>
			<div class='pos'>
				<div class='copyright'>
					© Copyright 2011-2013 www.houdunwang 后盾网
				</div>
			</div>	
		</div>
	</div>
</body>
</html>