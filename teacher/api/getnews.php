<?php
include_once "../base.php";

$newsid=$_GET['newsid'];
$news=find("news",$newsid);

echo nl2br($news['text']);
?>
