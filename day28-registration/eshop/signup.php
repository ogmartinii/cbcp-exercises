<?php
require_once './shared/database.php';
$db = new Database();

if($_POST)
{
    $userid = $db->insertUser($_POST['name'], $_POST['email'], $_POST['password']);
    session_start();
    $_SESSION['userid'] = $userid;
    header('Location:index.php');
}
?>
<form action="" method="post">
Jméno<br>
<input type="text" name="name"><br>
Email<br>
<input type="email" name="email"><br>
Heslo<br>
<input type="password" name="password"><br><br>
<input type="submit" value="Přihlásit">
</form>