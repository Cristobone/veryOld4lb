<body>
<?php
$username=$_GET['UserName'];
//сначала нужно получить строку,которая была введена пользователем,а потом передать как 2 параметр функции(setcookie)
//echo $username."\n";
setcookie("keyw",$username);
//echo $_COOKIE['keyw'];
?>
<br>
<a href='another_page1.php'>Link1</a><br>
<a href='another_page2.php'>Link2</a>
</body>