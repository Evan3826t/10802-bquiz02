<?php
include_once ("../base.php");

foreach($_POST['id'] as $id){
    if(!empty($_POST['del'] && in_array($id,$_POST['del']))){
        del("news", $id);
    }else{
        $row=find("news",$id);
        $row['sh']=(in_array($id,$_POST['sh']))?1:0;
        save("news",$row);
    }
}

to("../admin.php?do=news");



?>