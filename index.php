<html>

<meta http-equiv="Content-Type" content="text/html ; charset=utf8_decode" /> 

<body  style="background-image:url('http://ww4.sinaimg.cn/large/62751d77jw1f00ba417yag20du0fyn3s.gif');
background-repeat: repeat;
background-attachment: fixed;
background-position  : center top;">

<?php

include("config.php"); //引入数据库连接文件

$sql = "SELECT * FROM content"; //搜索数据表content

$resule = mysql_query($sql,$q);

?>

<table width="678" align="center">

<tr>

<td colspan="2"><h1>留言本</h1></td>

</tr>

<tr>

<td width="586"><a href="index.php">首页</a> | <a href="liuyan.php">留言</a></td>

</tr>

</table>

<?php

while($row=mysql_fetch_array($resule))

{

?>


<table width="678" border="1" align="center" cellpadding="1" cellspacing="1">

<tr>

<td width="178">Name:<?php echo $row[1] ?></td>

<td width="223">Email:<?php echo $row[2] ?></td>

</tr>

<tr>

<td colspan="4"><?php echo $row[3] ?></td>

</tr>

<tr>

</table>

<?php

}

?>


</body>

</html>
