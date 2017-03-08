<?php foreach($games as $game) : ?>
<div id="game_<?php echo $game->id; ?>" class="game">
    <div class="image">
        <img src="<?php echo $game->image_url; ?>" />
    </div>
    <div class="info">
        <h2 class="name"><?php echo $game->name; ?></h2>
        <div class="release"><?php echo $game->released_at; ?></div>
        <div class="genres">
            <?php foreach($genres_by_game[$game->id] as $genre): ?>
            <?php echo '<a href="#">' . $genre->name . '</a>'; ?>
            <?php endforeach; ?>
        </div>
        <div class="description">
            <?php echo $game->description; ?>
        </div>
        <div class="rating"><?php echo $game->rating . '%'; ?></div><br>        
    </div>
</div>
<?php endforeach; ?>

<script>
//code will be run only after the document is ready (code is inside of ready fnction)
    //shorthand $(function() {     });
    $(document).ready(function(){
    
    var headings = $("p:first");
    // console.log(headings);

   // jQuery methods go here...
   var game_1_element = document.getElementById('game_1');
   var game_1_jquery = $('#game_1');
   console.log(game_1_element);
   console.log(game_1_jquery);

   //retrieve from jQuery
   var game_1_element_again = game_1_jquery[0]; // v jequery array je na pozici 0
   console.log(game_1_element_again);
// vložení do jquery objektu
    game_1_element_again = $();
    $('.game').fadeOut(5000);

});
</script>