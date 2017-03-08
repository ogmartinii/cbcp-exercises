<?php
$games = Game_Model::getAllGames();

$genres_by_game = Genre_Model::getGenresForAllGames();

$list = new view ('game/list');
$list->games = $games; // todle je object, voláme z něj ->
$list->genres_by_game = $genres_by_game;


presenter::setTitle('OGG');
presenter::present($list);