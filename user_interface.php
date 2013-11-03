<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<?php
if(isset($_POST['switch1on']))
{
	
	include("connect.php");
	$value=1;
	
	 $query1="insert into raspberrypi(switch) values('$value') ";
					  @mysql_query($query1);
}
else if(isset($_POST['switch1off']))
{
	
	include("connect.php");
	$value=10;
	
	 $query1="insert into raspberrypi(switch) values('$value') ";
					  @mysql_query($query1);
}
else if(isset($_POST['switch2on']))
{
	
	include("connect.php");
	$value=2;
	
	 $query1="insert into raspberrypi(switch) values('$value') ";
					  @mysql_query($query1);
}
else if(isset($_POST['switch2off']))
{
	
	include("connect.php");
	$value=20;
	
	 $query1="insert into raspberrypi(switch) values('$value') ";
					  @mysql_query($query1);
}
else if(isset($_POST['switch3on']))
{
	
	include("connect.php");
	$value=3;
	
	 $query1="insert into raspberrypi(switch) values('$value') ";
					  @mysql_query($query1);
}
else if(isset($_POST['switch3off']))
{
	
	include("connect.php");
	$value=30;
	
	 $query1="insert into raspberrypi(switch) values('$value') ";
					  @mysql_query($query1);
}
if(isset($_POST['switch4on']))
{
	
	include("connect.php");
	$value=4;
	
	 $query1="insert into raspberrypi(switch) values('$value') ";
					  @mysql_query($query1);
}
else if(isset($_POST['switch4off']))
{
	
	include("connect.php");
	$value=40;
	
	 $query1="insert into raspberrypi(switch) values('$value') ";
					  @mysql_query($query1);
}
else if(isset($_POST['switch5on']))
{
	
	include("connect.php");
	$value=5;
	
	 $query1="insert into raspberrypi(switch) values('$value')  ";
					  @mysql_query($query1);
}
else if(isset($_POST['switch5off']))
{
	
	include("connect.php");
	$value=50;
	
	 $query1="insert into raspberrypi(switch) values('$value') ";
					  @mysql_query($query1);
}
?>
<style type="text/css">
<!--
body {
	background-color: #FFF;
	background-image: url(file:drea.jpg);
}
-->
</style></head>

<body>
<div>
  <div align="center"><strong>Controlling home appliances using internet project</strong></div>
</div>
<div id="TabbedPanels1" class="TabbedPanels">
  <ul class="TabbedPanelsTabGroup">
    <li class="TabbedPanelsTab" tabindex="0">Switch 1</li>
    <li class="TabbedPanelsTab" tabindex="0">Switch 2</li>
    <li class="TabbedPanelsTab" tabindex="0">Switch 3</li>
    <li class="TabbedPanelsTab" tabindex="0">Switch 4</li>
    <li class="TabbedPanelsTab" tabindex="0">Switch 5</li>
    
  </ul>
  <div class="TabbedPanelsContentGroup">
    <div class="TabbedPanelsContent">
      <form id="form1" name="form1" method="post" action="">
        <label>
          <input type="submit" name="switch1on" id="switch1on" value="On" />
        </label>
        <label>
          <input type="submit" name="switch1off" id="switch1off" value="Off" />
        </label>
      </form>
    </div>
    <div class="TabbedPanelsContent">
     <form id="form2" name="form2" method="post" action="">
        <label>
          <input type="submit" name="switch2on" id="switch2on" value="On" />
        </label>
        <label>
          <input type="submit" name="switch2off" id="switch2off" value="Off" />
        </label>
    </form></div>
    <div class="TabbedPanelsContent">
     <form id="form3" name="form3" method="post" action="">
        <label>
          <input type="submit" name="switch3on" id="switch3on" value="On" />
        </label>
        <label>
          <input type="submit" name="switch3off" id="switch3off" value="Off" />
        </label>
    </form></div>
    <div class="TabbedPanelsContent">
     <form id="form4" name="form4" method="post" action="">
        <label>
          <input type="submit" name="switch4on" id="switch4on" value="On" />
        </label>
        <label>
          <input type="submit" name="switch4off" id="switch4off" value="Off" />
        </label>
    </form></div>
    <div class="TabbedPanelsContent">
     <form id="form5" name="form5" method="post" action="">
        <label>
          <input type="submit" name="switch5on" id="switch5on" value="On" />
        </label>
        <label>
          <input type="submit" name="switch5off" id="switch5off" value="Off" />
        </label>
    </form></div>
  </div>
</div>
<script type="text/javascript">
<!--
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
//-->
</script>
</body>
</html>