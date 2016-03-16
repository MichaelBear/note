<?php

$q = mysql_connect("服务器","数据库用户","数据库密码");

if(!$q)

{

die('Could not connect: ' . mysql_error());

}

mysql_query("set names utf8"); //以utf8读取数据

mysql_select_db("guestbook",$q); //数据库

?>
