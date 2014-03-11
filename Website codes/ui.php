
<?php
if(isset($_POST['app1on']))
{
	
	include("connect.php");
	$value='a';
	
	 $query1="insert into switch1(switch) values('$value') ";
					  @mysql_query($query1);
}
else if(isset($_POST['app1off']))
{
	
	include("connect.php");
	$value='e';
	
	 $query1="insert into switch1(switch) values('$value') ";
					  @mysql_query($query1);
}

else if(isset($_POST['app2on']))
{
	
	include("connect.php");
	$value='b';
	
	 $query1="insert into switch2(switch) values('$value') ";
					  @mysql_query($query1);
}
else if(isset($_POST['app2off']))
{
	
	include("connect.php");
	$value='f';
	
	 $query1="insert into switch2(switch) values('$value') ";
					  @mysql_query($query1);
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User Interface</title>
<style type="text/css">
<!--
body {
	font: 100% Verdana, Arial, Helvetica, sans-serif;
	background: #666666;
	margin: 0; /* it's good practice to zero the margin and padding of the body element to account for differing browser defaults */
	padding: 0;
	text-align: center; /* this centers the container in IE 5* browsers. The text is then set to the left aligned default in the #container selector */
	color: #000000;
}

/* Tips for Elastic layouts 
1. Since the elastic layouts overall sizing is based on the user's default fonts size, they are more unpredictable. Used correctly, they are also more accessible for those that need larger fonts size since the line length remains proportionate.
2. Sizing of divs in this layout are based on the 100% font size in the body element. If you decrease the text size overall by using a font-size: 80% on the body element or the #container, remember that the entire layout will downsize proportionately. You may want to increase the widths of the various divs to compensate for this.
3. If font sizing is changed in differing amounts on each div instead of on the overall design (ie: #sidebar1 is given a 70% font size and #mainContent is given an 85% font size), this will proportionately change each of the divs overall size. You may want to adjust based on your final font sizing.
*/
.oneColElsCtrHdr #container {
	width: 46em;  /* this width will create a container that will fit in an 800px browser window if text is left at browser default font sizes */
	background: #0CF;
	margin: 0 auto; /* the auto margins (in conjunction with a width) center the page */
	border: 1px solid #000000;
	text-align: center; /* this overrides the text-align: center on the body element. */
}
.oneColElsCtrHdr #header { 
	background: #DDDDDD; 
	padding: 0 10px 0 20px;  /* this padding matches the left alignment of the elements in the divs that appear beneath it. If an image is used in the #header instead of text, you may want to remove the padding. */
} 
.oneColElsCtrHdr #header h1 {
	margin: 0; /* zeroing the margin of the last element in the #header div will avoid margin collapse - an unexplainable space between divs. If the div has a border around it, this is not necessary as that also avoids the margin collapse */
	padding: 10px 0;
	font-family: "Comic Sans MS", cursive;
}
.oneColElsCtrHdr #mainContent {
	padding: 0 20px; /* remember that padding is the space inside the div box and margin is the space outside the div box */
	background: #FFFFFF;
}
.oneColElsCtrHdr #footer { 
	padding: 0 10px; /* this padding matches the left alignment of the elements in the divs that appear above it. */
	background:#09F;
} 
.oneColElsCtrHdr #footer p {
	margin: 0; /* zeroing the margins of the first element in the footer will avoid the possibility of margin collapse - a space between divs */
	padding: 10px 0; /* padding on this element will create space, just as the the margin would have, without the margin collapse issue */
}
.oneColElsCtrHdr #container #mainContent h1 {
	font-size: large;
}
.oneColElsCtrHdr #container #mainContent h2 {
	font-size: medium;
}
-->
</style></head>

<body class="oneColElsCtrHdr">

<div id="container" style="width:1000px;height:340px">
  <div id="header">
    <h1 align="center">Controlling Electrical Appliances From Internet</h1>
  <!-- end #header --></div>
<div id="mainContent">
    <h1>&nbsp;</h1>
    <h1>&nbsp;</h1>
    <h1>Appliance 1</h1>
    <form id="form1" name="form1" method="post" action="">
      <table width="19%" border="0" align="center" bgcolor="#CCCCCC">
        <tr>
          <td width="48%"><label>
            <input type="submit" name="app1on" id="app1on" value="On" size="120"/>
          </label></td>
          <td width="52%"><label>
            <input type="submit" name="app1off" id="app1off" value="Off" />
          </label></td>
        </tr>
      </table>
    </form>
     <h1>&nbsp;</h1>
     <h1>Appliance 2</h1>
    <form id="form2" name="form2" method="post" action="">
      <table width="19%" border="0" align="center" bgcolor="#CCCCCC">
        <tr>
          <td width="47%"><label>
            <input type="submit" name="app2on" id="app2on" value="On" />
          </label></td>
          <td width="53%"><label>
            <input type="submit" name="app2off" id="app2off" value="Off" />
          </label></td>
        </tr>
      </table>
    </form>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <h2>&nbsp;</h2>
    <h2>&nbsp;</h2>
    <h2>&nbsp;</h2>
    <h2>Click to give back the control to manual switching</h2>
  <form id="form3" name="form3" method="post" action="">
      <label>
        <input type="submit" name="switch" id="switch" value="Switch" />
      </label>
  </form>
  <p>.</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  <!-- end #mainContent --></div>
  
</body>
</html>


