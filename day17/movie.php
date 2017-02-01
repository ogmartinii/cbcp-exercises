<?php

require_once('functions.php');
require_once('my_functions.php');
// get_names()
// get_ratings()
// get_name()
// get_rating()

if(isset($_GET['id'])) //true if key id exists within $_GET

    


$unique_id = $_GET['id']; //get id from URL's GET parameters



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo get_name($unique_id);//echo names based on the unque id ?></title> 
</head>
<body>

    <nav>
        <a href="list.php">A list of movies</a>
    </nav>

    <?php if(isset($unique_id)) : ?>
    <h1><?php echo get_name($unique_id); ?></h1>
        
    <div class="rating">
        Rating: <strong><?php echo get_rating($unique_id); ?></strong>
    </div> 
    <?php else : ?>

        Sorry, page not found.
    
    <?php endif; ?>


</body>
</html>