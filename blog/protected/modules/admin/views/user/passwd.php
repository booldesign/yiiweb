<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl ?>/assets/admin/css/public.css" />
	<title></title>
</head>
<body>
	<?php $form = $this->beginWidget('CActiveForm',array(
		'enableClientValidation'=>true,  //开启前端验证
		'clientOptions' => array(
			'validateOnSubmit'=>true,  //点击验证
		),
	)); ?>
	<?php if(Yii::app()->user->hasFlash('success')){
		echo Yii::app()->user->getFlash('success');
	}?>
		<table class="table">
			<tr >
				<td class="th" colspan="2">修改密码</td>
			</tr>
			<tr>
				<td>用户名</td>
				<td><?php echo Yii::app()->user->name; ?></td>
			</tr>
			<tr>
				<td>原始密码：</td>
				<td><?php echo $form->passwordField($userModel,'password'); ?></td>
				<?php echo $form->error($userModel, 'password') ?>
			</tr>
			<tr>
				<td>新密码：</td>
				<td><?php echo $form->passwordField($userModel,'password1') ?></td>
				<?php echo $form->error($userModel, 'password1') ?>
			</tr>
			<tr>
				<td>确认密码：</td>
				<td><?php echo $form->passwordField($userModel,'password2') ?></td>
				<?php echo $form->error($userModel, 'password2') ?>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" value="修改" class="input_button"/>
					<input type="reset" class="input_button"/>
				</td>
			</tr>
		</table>
	<?php $this->endWidget() ?>
</body>
</html>