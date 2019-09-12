<?php
if($error_message) {
	echo $error_message;
}
?>

<form action="index.php" method="POST">
	<p>ID：<input type="text" name="user_name"></p>
	<p>password：<input type="password" name="password"></p>
	<input type="submit" name="login" value="login">
</form>

<?php
session_start();

$error_message = "";

if(isset($_POST["login"])) {

	if($_POST["user_name"] == "pug" && $_POST["password"] == "5379") {
		$_SESSION["user_name"] = $_POST["user_name"];
		$login_success_url = "login_success.php";
		header("Location: {$login_success_url}");
		exit;
	}
$error_message = "※ID、もしくはパスワードが間違っています。<br>　もう一度入力して下さい。";
}
?>
