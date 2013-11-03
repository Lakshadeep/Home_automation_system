<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
if(isset($_POST['button']))
{
	
	include("connect.php");
	$value=$_POST['textfield'];
	
	 $query1="insert into raspberrypi(switch) values('$value') ";
					  @mysql_query($query1);
}
?>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="21%" border="2">
    <tr>
      <td width="36%"><label>
        <input type="text" name="textfield" id="textfield" />
      </label></td>
      <td width="64%"><label>
        <input type="submit" name="button" id="button" value="Submit" />
      </label></td>
    </tr>
  </table>
</form>
</body>
</html>