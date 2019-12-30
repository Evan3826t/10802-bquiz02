<style>
fieldset{
    list-style-type:none;
    padding:15px;
    display:inline-block;
    vertical-align:top;
    margin-top:15px;
}
fieldset li{
    margin:10px 0;
    cursor:pointer;
    color:blue;
}
.typelist{
    width:15%;    

}
.newslist{
    width:70%
 }

.list div{
    cursor:pointer;
    color:blue;
}
</style>

<div>目前位置：首頁 > 分類網誌 > <span class="type">健康新知</span></div>

<fieldset class="typelist">
    <legend>分類網誌</legend>
    <li data-type="1">健康新知</li>
    <li data-type="2">菸害防制</li>
    <li data-type="3">癌症防治</li>
    <li data-type="4">慢性病防治</li>

</fieldset>
<fieldset class="newslist">
    <legend>文章列表</legend>
    <div class="list"></div>    
    <div class="post"></div>    


</fieldset>


<script>

$("li").on("click",function(){
    let type=$(this).data("type")
    let nav=$(this).html()
    $(".type").html(nav)
    $(".post").html("")
    getList(type)
})

getList(1)

function getList(type){
    $.get("./api/getlist.php",{type},function(list){
        $(".list").html(list)
        $(".list div").on("click",function(){
            let newsid=$(this).data("news")
            $.get("./api/getnews.php",{newsid},function(news){
                $(".list").html("")
                $(".post").html(news)
            })
        })
    })
}

</script>