<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Practice URL</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
    // $("body").click(function(){
    //     $(this).hide();
    // });
    setInterval(function(){ 
       var x = Math.floor((Math.random() * 10) + 1);
      call(x);

    }, 3000);

});
function call(c){
  if(c%2){
    document.title = 'Salim Sodha';
  } else {
    document.title = 'Gani Sodha';

  }
}
</script>
</head>

<body>
<center>
	<table id="tblData" name="tblData" width="80%" border="1" cellpadding="0" cellspacing="0">
		<tr>
			<td colspan="3" align="center" style="border-right:0px;"><b>Details</b> </td>
			<td align="right" style="border-left:0px;">Salimkhan Sodha [10013] &nbsp;</td>
		</tr>
		<tr>
			<td colspan="4" align="center" style="background: gray; color: white;"><b><i>Activity URL</i></b></td>
		</tr>

		<tr>
			<td colspan="4" align="right" style="border-right:0px;">
				&nbsp;&nbsp;&nbsp;IP - 172.16.2.184<br>
				&nbsp;&nbsp;&nbsp;UBUNTU - 12.04 LTS<br>
				&nbsp;&nbsp;&nbsp;MYSQL - 5.5.41<br>
				&nbsp;&nbsp;&nbsp;PHP - 5.3.10<br>
				&nbsp;&nbsp;&nbsp;FIREFOX - 26.0<br>
			</td>
		</tr>

		<tr>
			<td colspan="4" style="background: gray; color: white;">
			<b><i><a href="phpmyadmin" style="color:white;">PHPMyAdmin - Database</a></i></b>
			</td>
		</tr>
		<tr>
			<td colspan="4" style="">
			<b><i><a href="10013/phpinfo.php" style="color:gray;">PHP INFO - PHP Settings Details</a></i></b>
			</td>
		</tr>
		<tr>
			<td colspan="4" style="background: gray; color: white;">
			<b><i><a href="10013/Practice/demo_01_manage_user/admin/user_manage.php" style="color:white;">Practice - DEMO 01 - Manage User</a></i></b>
			</td>
		</tr>
		<tr>
			<td colspan="4" style="">
			<b><i><a href="10013/Practice/demo_02_element_read/admin/manage.php" style="color:gray;">Practice - DEMO 02 - Read HTML element USE class simple_html_dom</a></i></b>
			</td>
		</tr>
		<tr>
			<td colspan="4" style="background: gray; color: white;">
			<b><i><a href="10013/Practice/demo_02_element_read/admin/manage2.php" style="color:white;">Practice - DEMO 03 - Read HTML element USE PHP Regular Expression(Simple)</a></i></b>
			</td>
		</tr>
		<tr>
			<td colspan="4" style="">
			<b><i><a href="10013/Practice/demo_02_element_read/admin/manage3.php" style="color:gray;">Practice - DEMO 04 - Read HTML element USE PHP Regular Expression(Dynamic)</a></i></b>
			</td>
		</tr>
		<tr>
			<td colspan="4" style="background: gray; color: white;">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="4" style="">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="4" style="">
                            <b><i><a href="jyllion_practice/titintech/Titintech/php_script/titintech.php" style="color:gray;">Project Jyllion Practice - Titintech</a></i></b>
			</td>
		</tr>

	</table>
	<br/>

	

</center>
 

</body>

</html>
