<?php
function validate_value($value, $messages)
{
    if(!$value)
    {
        $messages[]= 'The value is invalid';
        // nebo array_push($messages, 'The value is invalid');
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php $messages = array(); ?>
    <?php validate_value(0, $messages); ?>
    <?php foreach($messages as $message) : ?>
        <div class="message error"><?php echo $message; ?></div>
    <?php endforeach; ?>
</body>
</html>