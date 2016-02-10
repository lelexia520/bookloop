<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>用户注册</title>
</head>
<body>
<!-- 注册页面表格代码 -->
<form action="<?php echo ($signup); ?>" method="post">
	<p>username:<input type='text' name='username' /></p>
	<p>email:<input type='text' name='email' /></p>
	<p>nickname:<input type='text' name='nickname' /></p>
	<p>password:<input type='password' name='password' /></p>
	<p><input type='submit' name='submit' value='提交' /></p>
</form>


</body>
</html>