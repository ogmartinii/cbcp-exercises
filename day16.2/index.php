<!--exercise #2-->

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
?>

<ol>
<?php foreach($movies as $movie_name) : ?>
<li><?php echo $movie_name ?></li>
<?php endforeach ?>
</ol>

<!--exercise #2-->

<?php $total = count($movies); ?>
<ol>
<?php sort($movies); ?>
<?php for($i=0; $i < $total; $i++) : ?>
<li><?php echo $movies[$i]; ?></li>
<?php endfor ?>
</ol>

<!--exercise #4-->

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

<ol>
<?php asort($movie_ratings); ?>
<?php foreach($movie_names as $id => $movie_name) : ?>
<li><?php echo $movie_name; ?></li>
<?php echo $movie_ratings[$id]; ?>
<?php endforeach ?>
</ol>

<!--exercise #7-->

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
  )
);
?>

<ul>
<?php foreach($messages as $types => $message_of_type) : ?>
<?php foreach($message_of_type as $message_text) : ?>
<li><?php echo $message_text; ?></li>
<?php endforeach ?>
<?php endforeach ?>
</ul>

<!--exercise #8-->

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
  )
);
?>

<?php function do_something_risky() {
  // do the risky stuff

  // return new messages
  return array(
    'error' => array(
      'I knew this would happen!',
      'This always happens.',
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
<?php
$messages = array(
  'error' => array('Something went wrong', 'Something went REALLY wrong', 'There is no end to this!'),
  'warning' => array('This is your first warning', 'This is your final warning'),
  'success' => array('Finally, something was successful.')
);
?>


<?php $merged_message['error'] = array_merge($messages['error'], $new_messages['error']); ?>
<?php $merged_message['warning'] = array_merge($messages['warning'], $new_messages['warning']); ?>
<?php $merged_message['success'] = array_merge($messages['error'], $new_messages['success']); ?>
<ul>
<li><?php var_dump($merged_message); ?></li>


</ul>