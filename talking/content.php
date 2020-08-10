<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>發文</title>


</head>

<body bgcolor="#FFCCCC">
<table width="0" border="1" align="center" cellpadding="5" cellspacing="1"  >
<tr>
   <td><strong><font color="#660000">暱稱</strong></font></td>
   <td><input type="text" name="UserID" /></td>   
</tr>
<tr>
   <td><strong><font color="#660000">信箱</strong></font></td>
   <td><input type="text" name="Email" /></td>   
</tr>
<tr>
   <td height="58"><strong><font color="#660000">標題</strong></font></td>
   <td><input type="text" name="Title" /></td>   
</tr>
</table>
<div align="center">
  <p><strong>內容 </strong></p>
  <p>
    <textarea name="main" cols="50" rows="20" row="1000"></textarea>
  </p>
  <form id="form1" name="form1" method="post" action="">
    <input type="button" name="output" id="output" value="送出" />
    </form>
  <form id="form2" name="form2" method="post" action="information.php">
    <input type="submit" name="cancel" id="cancel" value="取消" />
    </form>
  <p>&nbsp;</p>
</div>
</body>
</html>