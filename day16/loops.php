<?php

$iterator= 0;

while($iterator < 3) {    //while loop
    $iterator++;
    echo $iterator.'<br />';
}

?>

<br />




<ol>
<?php for($i=1; $i <= 5; $i++) : ?>
<li><?php echo 'List item number ' . $i; ?></li>
<?php endfor; ?>
</ol>

<br>

<ul>
<?php 
for($j = 10; $j > 0; $j--) {
    if($j == 7)
    continue;
    if($j < 3)
    break;
    echo '<li>List item number ' . $j . '</li>';
}
?>
</ul>

<!--shorthand solution-->

<ul>
<?php for($i = 10; $i > 0; $i--) : ?>
    <?php if($i < 3) break; ?>
    <?php if($i == 7) continue; ?>
    <li>List item nr. <?php echo $i; ?></li>
<?php endfor; ?>
</ul>