<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>管理系统</title>
<meta name="keywords" content=""/>
<meta name="description" content=""/>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="viewport" content="width=device-width"/>
<link rel="stylesheet" href="/Public/admin/css/base.css"/>
<link rel="stylesheet" href="/Public/admin/css/login.css"/>
<?php  $img = 'http://8.su.bdimg.com/skin/'.rand(1,150).'.jpg'; ?>
<style>
body,html { background-image:url('<?php echo ($img); ?>'); background-size:cover;}
</style>
</head>
<body>
<div class="m-login">
	<div class="login-head"> 管理系统 </div>
	<form action="<?php echo U();?>" method="post" id="form">
		<div class="login-model">
			<div class="row">
				<input name="username"  type="text" class="login-user" id="username" value="" maxlength="30">
			</div>
			<div class="row row-b1">
				<input class="login-pwd" name="password" id="password" type="password" value="" maxlength="30">
			</div>
		</div>
		<div class="login-status"></div>
		<div class="login-button">
			<button class="u-login-btn" type="submit">登录</button>
		</div>
	</form>
</div>
</body>
</html>