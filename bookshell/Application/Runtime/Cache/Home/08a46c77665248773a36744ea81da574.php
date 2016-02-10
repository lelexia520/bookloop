<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<form action="<?php echo ($homeindexchange); ?>" method="get">
	<p><input type="text" name="nickname" value="<?php echo ($info('nickname')); ?>" /></p>
	<p><input type="text" name="introduction" value="<?php echo ($info('introduction')); ?>" /></p>
	<p><input type="submit" value="保存" /></p>
</form>
	
</body>
</html>