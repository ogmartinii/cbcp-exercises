<?php

require_once('functions.php');
require_once('my_functions.php');
// get_names()
// get_ratings()
// get_name()
// get_rating()



$all_the_names = get_names();
  


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>A list of movies</title>
</head>
<body>

    <h1>A list of movies</h1>

    <?php foreach ($all_the_names as $unique_id => $names) : ?>
        <h2><?php echo get_name($unique_id); ?></h2>
        <div class="rating">
            Rating: <strong><?php echo get_rating($unique_id); ?></strong>
        </div>
    <a href="movie.php?id=<?php echo $unique_id; ?>">Detail of the movie</a> 
    <?php endforeach; ?>

    

</body>
</html>