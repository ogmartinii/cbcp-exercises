<?php

class Genre_Model extends model
{
    protected static $object_class = 'Genre_Object';

    /**
    * @param array $game_ids - array of ids of games for 
    * which we want to select the genres
    */
    public static function getGenresForAllGames()
    {
        $query = "
        SELECT *
        FROM `game_has_genre`
        INNER JOIN `genre`
            ON `game_has_genre`.`genre_id` = `genre`.`id`
        ";

        $stmt = db::query($query);
        $objects = static::fetchObjects($stmt);

        $genres_by_game = array();
        foreach($objects as $object)       
        {
            // var_dump($object);
            /* if(!isset($genres_by_game[$object->game_id])) if an  arra of genres for this game_id does not exeist
            *  {
            *       $genres_by_game[$object->game_id] = array(); //create it with an empty array
            *  }
            *  $genres_by_game[$object->game_id] [] = $object; //we add a new item into this array
            */
            $genres_by_game[$object->game_id][] = $object;
        }

        return $genres_by_game;
    }
}