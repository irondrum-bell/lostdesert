<?php
	session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/common.css">
</head>

<body>
<div id="wrap">
	<div id="header">
    <?php include "./lib/top_login1.php"; ?>
	</div>  <!-- end of header -->

	<div id="menu">
	<?php include "./lib/top_menu1.php"; ?>
	</div>  <!-- end of menu --> 

  <div id="content">
		<div id="main_img"><img src="./img/main_img.jpg"></div>

<!-- 최근 글 불러오기 시작 -->
        <?php include "./lib/func.php"; ?>

		<div id="latest">
			<div id="latest1">
				<div id="title_latest1"><img src="./img/title_latest1.jpg"></div>
	  			<div class="latest_box">
				<?php latest_article("free", 5, 30); ?>
				</div>
			</div>
			<div id="latest2">
				<div id="title_latest2"><img src="./img/title_latest2.jpg"></div>
	  			<div class="latest_box">
				<?php latest_article("raid", 5, 30); ?>
				</div>
			</div>
		</div>
<!-- 최근 글 불러오기 끝 -->

  </div> <!-- end of content -->
</div> <!-- end of wrap -->

</body>
</html>
