<?php
$farmid= $_POST["pfarmid"];
$pname= $_POST["pname"];
$parea= $_POST["parea"];
$pcomments= $_POST["pcomments"];
$ptype= $_POST["ptype"];
$cleangid= $_POST["pgid"];

$conn = pg_connect("host=localhost dbname=postgis user=postgres password=lara1000" );

$sqlA= "UPDATE public.farmpaddocks SET farmid='".$farmid."', paddock_name='".$pname."',comments='".$pcomments."',parea='".$parea."',creation_d='(NOW())', paddock_type='".$ptype."'  WHERE gid='".$cleangid."';";


$result = pg_query($conn, $sqlA);
//header("Location: http://sistat01:8079/FARMWEB/VERSION2/php/farmmain.php?farmid=".$farmid."");
?>
