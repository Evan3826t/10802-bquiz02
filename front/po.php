<style>
fieldset{
    list-style-type: none;
    padding: 15px;
    display: inline-block;
    vertical-align: top;
    margin-top: 15px;
}

fieldset li{
    margin: 10px 0;
    cursor: pointer;
    color: blue;
}

.typelist{
    width: 15%;
}

.newslist{
    width: 70%;
}

</style>

<div>目前位置：首頁 > 分類網誌 > <span class="type">健康新知</span></div>


<fieldset class="typelist">
    <legend>分類網誌</legend>
    <li data-type="0">健康新知</li>
    <li data-type="1">菸害防制</li>
    <li data-type="2">癌症防治</li>
    <li data-type="3">慢性病防治</li>
    
</fieldset>
<fieldset class="newslist">
    <legend>文章列表</legend>
    <div class="list"></div>
    <div class="post"></div>

</fieldset>
<script>
$("li").on("click",function(){
    let type = $(this).data("type");
    let text = $(this).text();
    $(".type").text(text);
    getList(type);
    $(".post").html("");
})

function getList(type){
    $.get("./api/getlist.php",{type},function(res){
        $(".list").html(res);
        $(".list div").on("click",function(){
            let newsid = $(this).data("news");
            $.get("./api/getnews.php",{newsid},function(news){
                $(".post").html(news);
                $(".list").html("");

            })
        })
    })
}
</script>