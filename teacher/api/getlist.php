<?php
include_once "../base.php";

$type=$_GET['type'];
$news=all("news",["type"=>$type]);

foreach($news as $n){
    echo "<div data-news='".$n['id']."'>".$n['title']."</div>";
}
?>