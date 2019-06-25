<?php

require 'include/config.php';
if (isset($_COOKIE['logining'])) {
	header('Location: ' . $home_url . '/include/admin_panel.php');
}

if (isset($_POST['submit'])) {
	$login = mysqli_real_escape_string($connect , trim($_POST['login']));
	$password = mysqli_real_escape_string($connect , trim($_POST['password']));

	if (!empty($login) && !empty($password)) {
		$quary = "SELECT * FROM `users` WHERE username='$login' AND password='$password' ";
		$data = mysqli_query($connect,$quary);
		if(mysqli_num_rows($data) != 0)
		{
			header('Location: ' . $home_url . '/include/admin_panel.php');
			$result = mysqli_fetch_assoc($data);
			setcookie('logining',$result['Access'],time()+60*60*60);
		}
		else
		{
			$error_list = 'Неправельно введен логин или пороль.';
		}
	}
	else
	{
		$error_list = '';
		if (empty($login)) {
			$error_list .= '<p>Введите логин.</p>';
		}
		if (empty($password)) {
			$error_list .= '<p>Введите пороль.</p>';
		}
	}
}



if (!isset($_COOKIE['logining'])) {
	{
		$title_name = 'Вход в личный кабинет';
		require 'include/header.php';
		?>
		<div class="login_screen">
			<div class="login_container">
				<a href="<?php echo $home_url;?>"><img src="img/logo-nkse.png" alt=""></a>
				<?php if (isset($error_list)): ?>
					<div class="error_list">
						<?php echo $error_list; ?>
					</div>
				<?php endif ?>
				<div class="login_form">
					<form action="<?php echo $home_url;?>/admin.php" method='post'>
						<input type="text" name="login" placeholder="Логин">
						<input type="text" name="password" placeholder="Пороль">
						<button name="submit">Войти</button>
					</form>
				</div>
			</div>
		</div>
		<?
	}
}
?>