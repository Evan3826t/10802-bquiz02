<?php

$subject=find("que",$_GET['id']);

?>
<fieldset>
    <legend>目前位置：首頁>問卷調查><?=$subject['text'];?></legend>
    <form action="./api/vote.php" method="post">
        <h3><?=$subject['text'];?></h3>
        <?php
            $option=all("que",['parent'=>$subject['id']]);
            foreach($option as $opt){
                echo "<div>";
                echo "<input type='radio' name='opt' value='".$opt['id']."'>";
                echo $opt['text'];
                echo "</div>";
            }
        ?>
        <input type="submit" value="我要投票">
    </form>
</fieldset>