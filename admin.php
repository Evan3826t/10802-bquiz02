<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0039) -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>健康促進網</title>
<link href="./css/css.css" rel="stylesheet" type="text/css">
<script src="./js/jquery-1.9.1.min.js"></script>
<script src="./js/js.js"></script>
</head>

<body>
<div id="alerr" style="background:rgba(51,51,51,0.8); color:#FFF; min-height:100px; width:300px; position:fixed; display:none; z-index:9999; overflow:auto;">
	<pre id="ssaa"></pre>
</div>
	<div id="all">
		<!-- 1.切版 -->
		<?php include ("header.php"); ?>
        <div id="mm">
        	<div class="hal" id="lef">
            	                	    <a class="blo" href="?do=po">分類網誌</a>
               	                     	    <a class="blo" href="?do=news">最新文章</a>
               	                     	    <a class="blo" href="?do=pop">人氣文章</a>
               	                     	    <a class="blo" href="?do=know">講座訊息</a>
               	                     	    <a class="blo" href="?do=que">問卷調查</a>
               	                 </div>
            <div class="hal" id="main">
            	<div>
					<span style="width:78%; display:inline-block;">
                    	<marquee>請民眾踴躍投稿電子報，讓電子報成為大家相互交流、分享的園地!詳見最新文章</marquee>
                    </span>
                	<span style="width:18%; display:inline-block;">
					<!-- 登入管理 -->
					<?php
					if(!empty($_SESSION['user'])){
						if($_SESSION['user'] == 'admin'){
							echo "歡迎" . $_SESSION['user'] . "<br>";
							?>
								<button onclick="javascript:location.href='admin.php'">管理</button>
								<button onclick="javascript:location.href='./api/logout.php'">登出</button>
							<?php
						}
					}else{
						echo "<a href='?do=login'>會員登入</a>";
					}
					?>
                    	
                    </span>
					<!-- 1.切版 加入 $do 三元運算子-->
					<?php 
					$do = (empty($_GET['do']))?"home":$_GET['do'];
					$path = "./admin/". $do .".php";
					if(file_exists($path)){
						include ($path);
					}else{
						include ("./admin/home.php"); 
					}
					
					?>
                </div>
            </div>
        </div>
        <!-- 1.切版 -->
		<?php include ("footer.php"); ?>
    </div>

</body></html>