<style>
.line{
    height:25px;
    background:#ccc;
    display:inline-block;
}
.text{
    width:40%;
    display:inline-block;
    vertical-align:middle;
}
.result{
    height:25px;
    width:10%;
    display:inline-block;
}
</style>

<?php

$subject=find("que",$_GET['id']);

?>
<fieldset>
    <legend>目前位置：首頁>問卷調查><?=$subject['text'];?></legend>

        <h3><?=$subject['text'];?></h3>
        <?php
            $option=all("que",['parent'=>$subject['id']]);
            foreach($option as $k => $opt){
                $total=($subject['count']==0)?1:$subject['count'];
                $rate=round(($opt['count']/$total)*100) ;
               // echo $rate;
                echo "<div>";
                echo "<div class='text'>".($k+1) . ".";
                echo $opt['text'] . "</div>";
                echo "<div class='line' style='width:".(48*$rate/100)."%'></div>";
                echo "<div class='result'>".$opt['count']."票($rate%)</div>";
                echo "</div>";
            }
        ?>
        <button onclick="javascript:location.href='index.php?do=que'">返回</button>

</fieldset>