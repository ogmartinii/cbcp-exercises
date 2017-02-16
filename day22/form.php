<?php
if($_POST) {
    var_dump($_POST);
}

function print_radio($input_name, $values, $selected_value) 
{
    //for each $values
    foreach($values as $value => $label) {
        //print  a radiobutton input
        echo '<input type="radio" value="' . htmlspecialchars($value) . '" name="' . $input_name . '"' . ($value == $selected_value ? 'checked' : '') . ' id="' . $input_name . '_' . htmlspecialchars($value) . '"' . '>';
         
    
        
        
        //make it checked if it's value is $selected_value
     
    
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
</head>
<body>
    
    <form action="" method="post">
        <input type="text" name="text" value="Coding"><br>
        <textarea><?php echo htmlspecialchars('Coding'); ?></textarea><br>
        <input type="checkbox" name="checkbox" checked><br>
        <input type="radio" name="radiobtn" value="1"><br>
        <input type="radio" name="radiobtn" value="2"><br>
        <select name="select">
            <option value="1">One</option>
            <option value="2">Two</option>
        </select><br>
        <input type="password" name="password"><br>
        <input type="hidden" name="hidden"><br>
        <input type="file" name="file"><br>
        <input type="datetime-local" name="datetime"><br>
        
        <?php print_radio("nevim", [1, 2, 3, 4, 5], 4); ?>
        <input type="submit" value="submit form">

    </form>

</body>
</html>