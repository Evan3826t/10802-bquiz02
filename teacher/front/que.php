<fieldset>
    <legend>目前位置：首頁>問卷調查</legend>
    <table witdh="80%">
        <tr>
            <td width="10%">編號</td>
            <td>問卷題目</td>
            <td width="10%">投票總數</td>
            <td width="10%">結果</td>
            <td width="10%">狀態</td>
        </tr>
        <?php
            $subject=all("que",["parent"=>0]);
            foreach($subject as $k => $s){
        ?>
        <tr>
            <td><?=$k+1;?>.</td>
            <td><?=$s['text'];?></td>
            <td><?=$s['count'];?></td>
            <td><a href='index.php?do=result&id=<?=$s['id'];?>'>結果</a></td>
            <td>
            <?php
                if(empty($_SESSION['user'])){
                    echo "請先登入";
                }else{
                    echo "<a href='index.php?do=vote&id=".$s['id']."'>參與投票</a>";
                }
            ?>
            </td>
        </tr>
        <?php
        }
        ?>        
    </table>

</fieldset>