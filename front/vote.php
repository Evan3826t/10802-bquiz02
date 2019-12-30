<?php

$subject = find("que",['id'=>$_GET['id']]);

?>

<fieldset>
    <legend>目前位置:首頁>問卷調查><?= $subject['text']?></legend>
    <form action="./api/vote.php" method="post">
        <h3><?=$subject['text']?></h3>
        <?php
            $option = all("que",["parent"=>$_GET['id']]);
            foreach($option as $row){
                echo "<li>";
                echo "<input type='radio' name='opt' value='" . $row['id'] . "'>";
                echo $row['text'];
                echo "</li>";
            }
    
        ?>
            <input type="submit" value="我要投票">
    </form>
</fieldset>


