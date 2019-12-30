<fieldset>
    <legend>會員登入</legend>

    <table>
        <tr>
            <td>帳號：</td>
            <td><input type="text" name="acc" id="acc"></td>
        </tr>
        <tr>
            <td>密碼：</td>
            <td><input type="password" name="pw" id="pw"></td>
        </tr>
        <tr>
            <td><input type="button" value="登入" id="login"><input type="reset" value="清除"></td>
            <td>
                <a href="index.php?do=find_pw">忘記密碼</a> | 
                <a href="index.php?do=reg">尚未註冊</a>
            </td>
        </tr>
    </table>

</fieldset>
<script>
$("input[type='reset']").on("click",function(){
    $("#acc,#pw").val("")
})


$("#login").on("click",function(){

    let acc=$("#acc").val()
    let pw=$("#pw").val()
    console.log(acc,pw)
    $.post("./api/chkacc.php",{acc},function(status){
        console.log(status)
        if(status==='1'){

            $.post("./api/chkpw.php",{acc,pw},function(chkpw){

                if(chkpw==='1'){

                    if(acc=='admin'){
                        location.href="admin.php";

                    }else{

                        location.href="index.php";
                    }

                }else{

                    alert("密碼錯誤");
                    $("#acc,#pw").val("")
                }

            })

        }else{
            //帳號不存在
            alert("查無帳號")
            $("#acc,#pw").val("")

        }
    })
})

</script>