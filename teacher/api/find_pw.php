<?php
include_once "../base.php";

$email=$_POST['email'];
$chk=nums("user",["email"=>$email]);
if($chk>0){

    $data=find("user",["email"=>$email]);
    echo "您的密碼為:".$data['pw'];

}else{
    echo "查無此資料";
}

?>