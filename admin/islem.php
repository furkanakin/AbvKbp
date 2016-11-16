<?php
include 'set.php';


if (isset($_POST['menukaydet'])){

$menuekle=mysql_query("insert into menudb(menuisim,menulink,menusira) VALUES (
'".$_POST['menuisim']."',
'".$_POST['menulink']."',
'".$_POST['menusira']."'
)");
if(mysql_affected_rows())
{
	header("Location:menuler.php?durum=ok");
}
	else{
		header("Location:menuler.php?durum=no");
	}

}


if (isset($_POST['menuid'])){
$menusil=mysql_query("delete from menudb where menuid='".$_POST['menuid']."'");
if(mysql_affected_rows())
{
	header("Location:menuler.php");
}
	else{

		header("Location:menuler.php");
	}

}



?>
