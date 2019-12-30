<fieldset>
    <legend>目前位置:首頁>問卷調查</legend>
    <table>
        <tr>
            <td width="10%">編號</td>
            <td >問卷題目</td>
            <td width="10%">投票總數</td>
            <td width="10%">結果</td>
            <td width="10%">狀態</td>
        </tr>
        <?php
        include_once ("base.php");
        $data = all("que",["parent"=>0]);
        foreach($data as $key => $row){
           ?>
            <tr>
                <td><?=$key+1?></td>
                <td><?=$row['text']?></td>
                <td><?=$row['count']?></td>
                <td><a href="index.php?do=result&id=<?=$s['id']?>">結果</a></td>
                <td>
                <?php
                    if(empty($_SESSION['user'])){
                        echo "請先登入";
                    }else{
                        echo "<a href='index.php?do=vote&id=" . $row['id'] . "'>參與投票</a>";
                    }
                
                ?>
                </td>
            </tr>
           <?php
        }

        ?>
    </table>

</fieldset>