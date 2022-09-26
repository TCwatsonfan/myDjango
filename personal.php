<html>
  <head>
	<meta charset="utf-8">
	<title>註冊</title>
</head>
<body>
     <form action= "result3.php" method="post">

     	<table border="0" width="50%">
     		<tr>
     			<td>姓名:</td>
     			<td><input type="text" name="username"/></td>
     	     </tr>
     		<tr>
     			<td>性別:</td>
     			<td>
     			<input type="radio" name="sex" value="M" checked />男
     			<input type="radio" name="sex" value="F" checked />女
     			<input type="radio" name="sex" value="NO" checked />秘密
     			</td>
     		</tr>

     		<tr>
     			<td>教育程度：</td>
     			<td><select name="edu">
     				<option value="高中職" >高中職</option>
     				<option value="大學" >大學</option>
     				<option value="碩士" >碩士</option>
     				<option value="博士" >博士</option>

     			</select>
     		</td>
     	</tr>

     	
     	<tr>
     		<td colspan="2"><input type="submit" /></td>
     	</tr>
     	</table>
     	



</form>

</body>
</html>
