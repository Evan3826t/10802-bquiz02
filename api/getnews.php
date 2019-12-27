<?php

include_once ("../base.php");
$newsid= $_GET['newsid'];
$news = find("news", $newsid);

// 加上換行
echo nl2br($news['text']);


?>