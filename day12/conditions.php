<?php

// if(true)
// {
//     //this will run
// }


// if(false)
// {
//     //will not run
// }

// if(true != false)  //!= = does not equeal
// {
//     //will run
// }

$height='159';

if($height >= 180)
{
    echo('tall');
} elseif($height >= 160) 
{
    echo('average');
}
else {
    echo("you're midget");
}

$color = 'red';
switch($color)
{
    case 'blue':
        //this would run for blue
        break;
    case 'white':
    case 'red':
        //this would run for red and white
        break;
    case 'yellow':
        //this would run for yellow
        break;
    default:
        //this will run if no other case statement runs
        break;
}
?>
<br />
<br />
<?php
$os = 'OS X';
switch($os)
{
    case 'Windows':
        echo('Edge');
        break;
    case 'Linux':
        echo('Firefox');
        break;
    case 'OS X':
        echo('Safari');
        break;
    default:
        echo('Just use Chrome');
}

?>

<?php

if($age > 35){}//1
if($employed == true){}//2
if($age <= 18){}//3
if($age < 12 && $gender == 'female'){}//4
if(age >= 18 && $employed = false){}//5    // if(age >= 18 && !$employed )
if(age >= 60 && $employed = true && $gender == 'female'){}//6
if(($gender == 'male' && $age > 20) || ($employed = false && $gender = 'female' && $age > 25)){} //7

?>