<?php

/**
*  Saves names to $movie_names via function get_names()
**/
function get_name($unique_id) //
{
    $movie_names = get_names();
    return $movie_names[$unique_id];
}
/**
*  Saves ratings to $movie_ratings via function get_ratings()
**/
function get_rating($unique_id)
{
    $movie_ratings = get_ratings();
    return $movie_ratings[$unique_id];
}
