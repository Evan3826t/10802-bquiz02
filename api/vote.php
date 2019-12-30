<?php
include_once ("../base.php");

$opt = $_POST['opt'];

$row = find("que",$opt);
$row['count']++;
save("que",$row);

$subject = find("que",["id"=>$row['parent']]);
$subject['count']++;
save("que",$subject);

to("../index.php?do=result&id=" . $subject['id']);
?>