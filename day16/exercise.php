<?php

$movies = array(
  'The Shawshank redemption',
  'The Godfather',
  'The Godfather II',
  'Dark Knight', 
  '12 angry men', 
  'Schindler\'s list',
  'Pulp fiction',
  'Lord of the Rings: Return of the King',
  'The good, the bad and the ugly',
  'Fight club'
);

$movie_names = "";
$for_names ="";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP exercise</title>
</head>
<body>

<ol>
<?php foreach($movies as $movie_names) : ?>
<?php echo "<li>" . $movie_names . "</li>"; ?>  <!-- or <li>echo $movie_names</li> -->
<?php endforeach; ?>
</ol>

<br>

<ol>
<?php sort($movies); ?> <!-- sorting -->
<?php for($i=0; $i < count($movies); $i++) : ?>  <!--count is calculated in each loop, can be put outside of the function with new var=$nr_of_movies -->
<li><?php echo $movies[$i]; ?></li>
<?php endfor; ?>
</ol>

<?php
$movie_names = array(
  'tt0111161' => 'The Shawshank redemption',
  'tt0068646' => 'The Godfather',
  'tt0071562' => 'The Godfather II',
  'tt0468569' => 'Dark Knight', 
  'tt0050083' => '12 angry men', 
  'tt0108052' => 'Schindler\'s list',
  'tt0110912' => 'Pulp fiction',
  'tt0167260' => 'Lord of the Rings: Return of the King',
  'tt0060196' => 'The good, the bad and the ugly',
  'tt0137523' => 'Fight club'
);
$movie_ratings = array(
  'tt0111161' => 9.2,
  'tt0068646' => 9.2,
  'tt0071562' => 9.0,
  'tt0468569' => 8.9, 
  'tt0050083' => 8.9, 
  'tt0108052' => 8.9,
  'tt0110912' => 8.9,
  'tt0167260' => 8.9,
  'tt0060196' => 8.9,
  'tt0137523' => 8.8
);
?>

 
<?php asort($movie_names); ?>
<ol>
<?php foreach($movie_names as $unique_id => $movie_name) : ?>
<?php echo "<li>" . $movie_name . "</li>"; ?> 
<?php echo $movie_ratings[$unique_id]; ?>  <!-- or <li>echo $movie_names</li> -->
<?php endforeach; ?>
</ol>

<br />

<?php asort($movie_ratings); ?>
<ol>
<?php foreach($movie_ratings as $unique_id => $rating) : ?>
<?php echo "<li>" . $movie_names[$unique_id] . "</li>"; ?> 
<?php echo $rating; ?>  <!-- or <li>echo $movie_names</li> -->
<?php endforeach; ?>
</ol>
<!--exercise 7-->

<?php

$messages = array(
  'error' => array(
    'Something went wrong',
    'Something went REALLY wrong',
    'There is no end to this!'
  ),
  'warning' => array(
    'This is your first warning',
    'This is your final warning'
  ),
  'success' => array(
    'Finally, something was successful.'
  ),
);

?>


<?php foreach($messages as $message_type => $messages_of_type) : ?>

  <?php foreach($messages_of_type as $message_text) : ?>  
  <div class="message <?php echo $message_type; ?>"><?php echo $message_text; ?></div>
  <?php endforeach ?>
<?php endforeach ?>
<br />
<!--exercise 8-->
<!--merge two multidimensional  arrays into one-->
<?php
function do_something_risky() {
  // do the risky stuff

  // return new messages
  return array(
    'error' => array(
      'I knew this would happen!',
      'This always happens.'
    ),
    'warning' => array(
      'You should fix this before proceeding'
    ),
    'success' => array()
  );
}

// let's try it
$new_messages = do_something_risky();

?> 


<!--<?php 
foreach($messages as $type => $messages_of_type)
{
  foreach($message_of_type as $message) 
  {
    $merged_messages[$type][] = $message
  }
}
?>




</body>
</html>