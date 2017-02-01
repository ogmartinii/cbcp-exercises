
<?php


if (!empty($_POST)) {
    echo 'adding product '. $_POST['product']. ', size ' . $_POST['size'];
if(isset($_POST['really']) && $_POST['really'] == 'on') {
    echo 'I mean it';
}
else {
    echo ' Nope';
}
// if(isset($_POST['color'])) {
//     echo $_POST['color'];
// }
}
?>

<form action="" method="post">
Product: 
<input type="text" name="product"><br>
Size:
<input type="text" name="size"><br>

<label for="really">Do you really want it?</label>
<input type="checkbox" name="really" id="really"><br>

Color: <br>
<input type="radio" name="color" value="black" id="color-black"><label for="color-black">black</label><br>
<input type="radio" name="color" value="white" id="color-white"><label for="color-white">white</label><br>
<input type="radio" name="color" value="violet" id="color-violet"><label for="color-violet">violet</label><br>

Country
<select name="country">
    <option value="CZ">Czech Republic</option>  <!--you can add value atribute, it will be sent instead of the whole option-->
    <option value="BR" selected>Banana Republic</option>
    <option value="KR">Kiwi Republic</option>
</select>
<hr>
Note:
<textarea name="note">prewfilled</textarea>
<input type="submit"> <!--vytvoří posílací tlačítko, změna názvu tlačítka přes value=""-->    
</form>  
