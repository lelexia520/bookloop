<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
卖书界面<br />
书名、作者、出版社、出版年月、定价、ISBN、类型、卖家、所在院系、住址、联系方式｝<br />
其中出版年月、类型、所在院系等为预设值的下拉框。
<form action='<?php echo ($add); ?>' method='get'>
	<p>应该还有图像的上传</p>
	<p>书名:<input type='text' name='bookname' /></p>
	<p>作者:<input type='text' name='bookwriiter' /></p>
	<p>出版社:<input type='text' name='bookpress' /></p>
	<p>出版年月:
		<select name='bookpresstime'>
			<option value='1996'>1996</option>
			<option value='1997'>1997</option>
			<option value='1998'>1998</option>
		</select>
	</p>
	<p>定价:<input type='text' name='bookprice' /></p>
	<p>IBSN:<input type='text' name='bookibsn' /></p>
	<p>出版年月:
		<select name='booktype'>
			<option value='文学'>文学</option>
			<option value='艺术'>艺术</option>
			<option value='科学'>科学</option>
		</select>
	</p>
	<p>之后 卖家 院系 住址 联系方式 从用户个人信息中采集吧</p>
	<p><input type='submit' value='submit' /></p>
</form>
</body>
</html>