<?php
require_once 'database.php'; // will connect to the database
if ($_POST) {
    $stmt = $db->prepare('INSERT INTO albums (albumname, id_owner) VALUES (?, ?)'); // will prepare place in database
    $stmt->execute([$_POST['name'], $_POST['owner']]); // will add values from form to db
    header('Location: albums.php?status=ok');    // PRG  přidám status=ok - přesměrování na jinou URL (albums.php?status=ok')
}
if (isset($_GET['status']) && $_GET['status'] == 'ok') { // pokud existuje 'status' v GET a status je 'ok' vypíše OK (místo OK by mělo být něco jako děkujeme za odeslání vašich údajů)
    echo 'OK';
}
$stmt = $db->prepare('SELECT id, firstname, lastname FROM users ORDER BY lastname, firstname'); // seřadíme podle jména, je to kvůli tomu, abysme mohli níže natáhnout jména do selekt boxu
$stmt->execute(); // provedení seřazení
$owners = []; // create new array
foreach ($stmt->fetchALL() as $value) {
    $owners[$value['id']] = $value['firstname'] . ' ' . $value['lastname'];
}
?>
<form action="" method="post">
Album name<br />
<input name="name"><br />
Album owner<br /><select name = "owner">
<?php 
foreach ($owners as $id => $name) {
    echo "<option value=$id>$name</option>";
}
?>
</select>

<input type="submit">
</form>
<?php
