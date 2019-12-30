<?php
include_once ("../base.php");

$data['text'] = $_POST['subject'];
$data['parent'] = 0;
$data['count'] = 0;
save("que", $data);

$parent = q("select max(id) from que")[0][0];
foreach($_POST['option'] as $opt){
    $data['text'] = $opt;
    $data['parent'] = $parent;
    $opt['count'] = 0;
    save("que", $data);
}
to("../admin.php?do=que");
?>