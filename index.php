<?php
	include ('layout_manager.php');
	include ('content_function.php');
?>
<html>
<head><title>Български туризъм</title></head>
<link href="/forum/styles/main.css" type="text/css" rel="stylesheet" />
<body>
	<div class="pane">
		<div class="header"><div class="logo"><a href="index.htm"><img src="http://localhost/site/img/logo.png" alt="" /></a><h1><a href="/forum">Български туризъм</a></h1></div></div>
		<div class="loginpane">
			<?php
				session_start();
				if (isset($_SESSION['username'])) {
					logout();
				} else {
					if (isset($_GET['status'])) {
						if ($_GET['status'] == 'reg_success') {
							echo "<h1 style='color: green;'>Новият потребител е регистриран успешно</h1>";
						} else if ($_GET['status'] == 'login_fail') {
							echo "<h1 style='color: red;'>невалидно име или парола</h1>";
						}
					}
					loginform();
				}
			?>
		</div>
		<div class="forumdesc">
			<p>Форум за Български туризъм</p>
		</div>
		<div class="content">
			<?php dispcategories(); ?>
		</div>
	</div>
</body>
</html>