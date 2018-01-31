<?php
	function loginform() {
		echo "<form action='/validatelogin.php' method='POST'>
			  <p>Потребител:</p>
			  <input type='text' id='usernameinput' name='usernameinput' />
				<p>Парола:</p>
				<input type='password' id='passwordinput' name='passwordinput' />
				<input type='submit' value='Вход' />
				<button type='button' onclick='location.href=\"/register.html\";'>Регистрирай се</button>
			</form>";
	}
	
	function logout() {
		echo nl2br("<p>Здравей ".$_SESSION['username']."!</p>
				<form action='/logout.php' method='GET'>
				<input type='submit' value='Изход' /></form>");
	}
?>
