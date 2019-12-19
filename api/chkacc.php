<?php
include_once ("../base.php");

$acc = $_POST['acc'];
$chk = nums("user", ['acc'=>$acc]);
if($chk>0){
    echo 1;
}else{
    echo 0;
}
?>