<fieldset>
    <legend>新增問卷</legend>
    <form action="./api/addque.php" method="post">
        <table>
            <tr>
                <td>問卷名稱</td>
                <td><input type="text" name="subject"></td>
            </tr>
            <tr>
                <td colspan="2" id="options">
                    選項<input type="text" name="option[]"><br>
                    <input type="button" value="更多" onclick="moreOpt()">
                </td>
            </tr>
        </table>
        <input type="submit" value="新增"><input type="reset" value="清空">
    </form>
</fieldset>

<script>
function moreOpt(){
    let str = `選項<input type="text" name="option[]"><br>`;
    $("#options").prepend(str);
}

</script>