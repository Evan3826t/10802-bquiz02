<?php
include_once "../base.php";

$acc=$_POST['acc'];
$pw=$_POST['pw'];
$chk=nums("user",['acc'=>$acc,'pw'=>$pw]);
if($chk>0){
    $_SESSION['user']=$acc;
    
    echo 1;

}else{
    echo 0;
}

?>