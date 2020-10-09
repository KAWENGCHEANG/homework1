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
<? # 導入check.php，以確認身分 ?>
<? require("check.php") ;?>
<? @session_start(); // 開啟 session ;?>
<center>

<html>
<head>
<meta http-equiv="Content-Language" content="zh-tw">
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>使用者登錄區</title>
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
<form action="result.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="user_com" value="<?=$_GET['user_com'];?>"><input type="hidden" name="user_name" value="<?=$_SESSION['user_name'];?>"><input type="hidden" name="user_passwd" value="<?=$_SESSION['user_passwd'];?>">   
<table border="0" width="500">   
  <tr>   
    <td width="102%" colspan="4" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" bgcolor="<?=$title_bgcolor;?>">   
      <p align="center"><font size="2" color="<?=$title_font;?>">Announcement from teacher </font></td>   
  </tr>   
  <tr>   
    <td width="25%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font size="2" color="<?=$menu_font;?>">Title of the announcement </font><font size="2">:</font></td>   
    <td width="77%" align="center" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" colspan="3"><font size="2" color="<?=$explor_font;?>"><input type="text" name="title" size="52" style="background-color: <?=$bgcolor;?>; font-family: Verdana; color: <?=$explor_font;?>; border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"></font></td>  
  </tr>
    <tr>   
    <td width="20%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font size="2" color="<?=$menu_font;?>">Name of the Teacher : </font></td>   
    <td width="30%" align="center" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font size="2" color="<?=$explor_font;?>"><input type="text" name="name" size="15" style="background-color: <?=$bgcolor;?>; font-family: Verdana; color: <?=$explor_font;?>; border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"></font></td>  
    <td width="20%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font size="2" color="<?=$menu_font;?>">Email address of the Teacher : </font></td>  
    <td width="30%" align="center" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font size="2" color="<?=$explor_font;?>"><input type="text" name="mail" size="15" style="background-color: <?=$bgcolor;?>; font-family: Verdana; color: <?=$explor_font;?>; border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"></font></td>  
  </tr>   
  <tr>  
    <td width="25%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font size="2" color="<?=$menu_font;?>">Image:</font></td>  
</center>   
    <td width="77%" align="center" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" colspan="3">  
    <p align="left">  
    <input type="radio" name="kind" value="img/01.gif" checked><img src="img/01.gif"> 
    <input type="radio" name="kind" value="img/02.gif"><img src="img/02.gif">      
    <input type="radio" name="kind" value="img/03.gif"><img src="img/03.gif">      
    <input type="radio" name="kind" value="img/04.gif"><img src="img/04.gif">      
    <input type="radio" name="kind" value="img/05.gif"><img src="img/05.gif">      
    <input type="radio" name="kind" value="img/06.gif"><img src="img/06.gif">      
    <input type="radio" name="kind" value="img/07.gif"><img src="img/07.gif">     
    <input type="radio" name="kind" value="img/08.gif"><img src="img/08.gif">       
      
    <input type="radio" name="kind" value="img/09.gif"><img src="img/09.gif">      
    <input type="radio" name="kind" value="img/10.gif"><img src="img/10.gif">      
    <input type="radio" name="kind" value="img/11.gif"><img src="img/11.gif">      
    <input type="radio" name="kind" value="img/12.gif"><img src="img/12.gif">      
    <input type="radio" name="kind" value="img/13.gif"><img src="img/13.gif">      
    <input type="radio" name="kind" value="img/14.gif"><img src="img/14.gif">      
    <input type="radio" name="kind" value="img/15.gif"><img src="img/15.gif">      
    <input type="radio" name="kind" value="img/16.gif"><img src="img/16.gif">       
    </p>      
    </td>       
  </tr>       
<center>      
  <tr>       
    <td width="25%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font size="2" color="<?=$menu_font;?>">Links:</font></td>       
    <td width="77%" align="center" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" colspan="3"><font face="v" size="2" color="<?=$explor_font;?>"><input type="text" name="url" size="52" style="background-color: <?=$bgcolor;?>; font-family: Verdana; color: <?=$explor_font;?>; border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"></font></td>      
  </tr>      
  <tr>       
    <td width="25%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font size="2" color="<?=$menu_font;?>">Documents upload:</font></td>       
    <td width="77%" align="center" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" colspan="3"><font face="v" size="2" color="<?=$explor_font;?>"><input type="file" name="updata" size="44" style="background-color: <?=$bgcolor;?>; font-family: Verdana; color: <?=$explor_font;?>; border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"></font></td>      
  </tr>   
  <tr>      
    <td width="102%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" colspan="4"><font size="2" color="<?=$menu_font;?>">Contents</font></td>      
  </tr>      
  <tr>      
    <td width="102%" align="center" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" colspan="4"><font size="2" color="<?=$explor_font;?>"><textarea rows="7" cols="65" style="background-color: <?=$bgcolor;?>; font-family: Verdana; color: <?=$explor_font;?>; border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" name="note"></textarea></font></td>      
  </tr>      
  <tr>      
    <td width="102%" align="center" bgcolor="<?=$login_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" colspan="4"><input type="Submit" name="send" value="Send" style="background-color: <?=$bgcolor;?>; color: <?=$login_font;?>; border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"></td>      
  </tr>      
</table>      
 <table width="309" height="105" border="1">
   <tr>
     <td><p>月 日P5B班家課通告</p>
       <p>通告：<br>
         語文：<br>
         數學：<br>
         英文：<br>
         常識：<br>
      其他：</p></td>
   </tr>
 </table>
</form>   
<br>  
<a href="sub.php"><font color="<?=$font_link;?>" size="2">Back home</font></a>     
</center>      
　    
</body>    
    
</html>