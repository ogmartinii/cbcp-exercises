<?php
require_once './shared/database.php';
$db = new Database();
if($_POST)
{
    
    
    // get user information by email (new function)
    $user = $db->getUserByEmail($_POST['email']);
 
    // verify the password
    if(password_verify($_POST['password'], $user['password']))
    {
        session_start();
        $_SESSION['userid'] = $user['id'];
        header('Location:index.php');
    }
    else{
        echo "wrong password";
    }
    
    
}
?>
<form action="" method="post">
Email<br>
<input type="email" name="email"><br>
Heslo<br>
<input type="password" name="password"><br><br>
<input type="submit" value="Přihlásit">
</form>