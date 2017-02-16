<?php
// require_once './shared/database.php';
// $db = new Database();
if(isset($_POST)){
    var_dump($_POST);
}
?>
<form action="" method="post">
Email<br>
<input type="text" name="user_name"><br>
Heslo<br>
<input type="password" name="password"><br><br>
<input type="submit" value="Přihlásit">
</form>

