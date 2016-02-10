<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<form action="<?php echo ($signin); ?>" method="post">
	<!--<p>username:<input type='text' name='username' /></p>-->
	<p>email:<input type='text' name='email' /></p>
	<!--<p>nickname:<input type='text' name='nickname' /></p>-->
	<p>password:<input type='password' name='password' /></p>
	<p>
		<a href='<<?php echo ($signup); ?>>'>signup</a> 
		<input type='submit' name='submit' value='signin' />
	</p>
</form>

</body>
</html>