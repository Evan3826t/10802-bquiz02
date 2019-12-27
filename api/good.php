<?php

include_once ("../base.php");

$id = $_POST['id'];
$user = $_POST['user'];
$type = $_POST['type'];

$news = find("news",$id);

if($type == 1){
    // 按讚

    $log['news'] = $id;
    $log['user'] = $user;
    save("log", $log);
    $news['good']++;
}else{
    // 收回讚
    del("log",['news'=>$id, "user"=>$user]);
    $news['good']--;
}

save("news", $news);
?>