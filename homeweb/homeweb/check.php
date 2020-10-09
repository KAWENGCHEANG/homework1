<?
#  -----------------------------------------  #  
#  程式名稱：C.P.Sub公告系統                  #
#  設計者：Cooltey                            # 
#  E-Mail：coolteygame@gmail.com             #
#  HomePage：http://www.cooltey.org            #
#  程式版本：V4.5                            #
#  最後更新：2008/9/1                         #
#  注意，本版權宣告不得刪除，程式可任意修改！ # 
#  最下面一行的 Powered By Cooltey 請不要刪除 #
#  -----------------------------------------  #
?>
<? # 將to_set.php檔案導入 ?>
<? require("to_set.php");?>
<? require("sign.php");?>
<? @session_start(); // 開啟 session ;?>
<html>
<head>
<meta http-equiv="Content-Language" content="zh-tw">
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>Check</title>
<STYLE type=text/css>


A {
	TEXT-DECORATION: none
}
A:hover {
	TEXT-DECORATION: underline
}
</STYLE>
</head>

<body background="<?=$background;?>" bgcolor="<?=$bgcolor;?>">
<center>
<?
if($_GET[user_com] != "")
{
  $user_com = $_GET[user_com];
}elseif($_POST[user_com] != "")
{
  $user_com = $_POST[user_com];
}
if($user_com == "biggest")
{
?>
<font color="<?=$font_link;?>" size="2"><b>[ <?=$user_name;?> ]</b>Access authority:</font><font color="Red" size="2">Maximum</font><br>
<font color="<?=$font_link;?>" size="2">/</font>
<a href="submit.php?cookie=yes&user_com=<?= $user_com ;?>"><font color="<?=$font_link;?>" size="2">Publish </font></a><font color="<?=$font_link;?>" size"2">/</font>
<a href="del.php?cookie=yes&user_com=<?= $user_com ;?>"><font color="<?=$font_link;?>" size="2">Cancel / Edit the document </font></a><font color="<?=$font_link;?>" size"2">/</font>
<a href="deldata.php?cookie=yes&user_com=<?= $user_com ;?>"><font color="<?=$font_link;?>" size="2">Cancel the document </font></a><font color="<?=$font_link;?>" size"2">/</font>
<a href="set.php?cookie=yes&user_com=<?= $user_com ;?>"><font color="<?=$font_link;?>" size="2">Setting </font></a><font color="<?=$font_link;?>" size"2">/</font>
<a href="info.php?cookie=yes&user_com=<?= $user_com ;?>"><font color="<?=$font_link;?>" size="2">Program information </font></a><font color="<?=$font_link;?>" size"2">/</font>
<a href="sub.php?cookie_clear=yes"><font color="<?=$font_link;?>" size="2"><b>Back home and log out</b></font></a><font color="<?=$font_link;?>" size="size">/</font><?
}else{
?>
<font color="<?=$font_link;?>" size="2"><b>[ <?=$user_name;?> ]</b>Access authority:</font><font color="Red" size="2">Minimum</font><br>
<font color="<?=$font_link;?>" size="2">/</font>
<a href="submit.php?cookie=yes&user_com=<?= $user_com ;?>"><font color="<?=$font_link;?>" size="2">Publish </font></a><font color="<?=$font_link;?>" size"2">/</font>
<a href="del.php?cookie=yes&user_com=<?= $user_com ;?>"><font color="<?=$font_link;?>" size="2">Cancellation of the announcement </font></a><font color="<?=$font_link;?>" size"2">/</font>
<a href="info.php?cookie=yes&user_com=<?= $user_com ;?>"><font color="<?=$font_link;?>" size="2">Program information </font></a><font color="<?=$font_link;?>" size"2">/</font>
<a href="sub.php?cookie_clear=yes"><font color="<?=$font_link;?>" size="2"><b>Back home and log out </b></font></a><font color="<?=$font_link;?>" size"2">/</font>
<?
}
?>
<br>
<br>
</body>

</html>
