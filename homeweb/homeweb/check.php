<?
#  -----------------------------------------  #  
#  �{���W�١GC.P.Sub���i�t��                  #
#  �]�p�̡GCooltey                            # 
#  E-Mail�Gcoolteygame@gmail.com             #
#  HomePage�Ghttp://www.cooltey.org            #
#  �{�������GV4.5                            #
#  �̫��s�G2008/9/1                         #
#  �`�N�A�����v�ŧi���o�R���A�{���i���N�ק�I # 
#  �̤U���@�檺 Powered By Cooltey �Ф��n�R�� #
#  -----------------------------------------  #
?>
<? # �Nto_set.php�ɮ׾ɤJ ?>
<? require("to_set.php");?>
<? require("sign.php");?>
<? @session_start(); // �}�� session ;?>
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
