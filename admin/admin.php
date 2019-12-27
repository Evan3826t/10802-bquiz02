<fieldset>
    <legend>帳號管理</legend>
    <form action="./api/userdel.php" method="post">
        <table>
            <tr>
                <td>帳號</td>
                <td>密碼</td>
                <td>刪除</td>
            </tr>
            <?php
                $users = all("user");
                foreach($users as $u){
                    if($u['acc'] != "admin"){
            ?>
            <tr>
                <td><?=$u['acc'];?></td>
                <td><?=str_repeat("*",mb_strlen($u['pw']));?></td>
                <td><input type="checkbox" name="del[]" value="<?=$u['id']?>"></td>
            </tr>
            <?php
            }}
            ?>
        </table>
        <div class="ct">
            <input type="submit" value="確認刪除"><input type="reset" value="清空選取">
        </div>
    </form>
    <h1>新增會員</h1>
    <table>
        <tr>
            <td>Step1:登入帳號</td>
            <td><input type="text" name="acc" id="acc"></td>
        </tr>
        <tr>
            <td>Step2:登入密碼</td>
            <td><input type="password" name="pw" id="pw"></td>
        </tr>
        <tr>
            <td>Step3:再次確認密碼</td>
            <td><input type="password" name="pw2" id="pw2"></td>
        </tr>
        <tr>
            <td>Step4:信箱(忘記密碼時使用)</td>
            <td><input type="email" name="email" id="email"></td>
        </tr>
        <tr>
            <td><button id="reg">註冊</button><button id="reset">清除</button></td>
            <td></td>
        </tr>
    </table>
</fieldset>
<script>
$("#reset").on("click", function(){
    $("#acc, #pw, #email, #pw2").val("");
})

$("#reg").on("click",function(){
    let acc=$("#acc").val();
    let pw=$("#pw").val();
    let pw2=$("#pw2").val();
    let email=$("#email").val();

    if ( acc=="" || pw=="" || pw2=="" || email==""){
        alert("不可空白");
    }else{

        $.post("./api/chkacc.php",{acc},function(status){
            if(status=="1"){
                alert ("帳號重複");
            }else if(pw != pw2){
                alert ("密碼錯誤");
            }else{
                $.post("./api/reg.php",{acc, pw, email},function(status){
                   location.reload();
                })
            }
        })

    }
})
</script>