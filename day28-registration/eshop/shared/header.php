<?php 
require_once './shared/user.php';
require_once './shared/database.php';
$db = new Database();
$user = new User($db);

$name = $user->getName();
if($name)
    {
    echo 'počet kusů v košíku: ' . count($_SESSION['products']) . '<br>';
    echo htmlspecialchars($user->getName());
    echo '<br><a href="summary.php">summary</a>';
    echo '<br><a href="logout.php">logout</a>';
    }
    else{
        echo '<a href="login.php">login</a> ';
        echo '<a href="signup.php">signup</a>';
    }