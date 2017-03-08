<style>
    body {
        background-color: red;
    }

    .light {
        float: left;
    }
</style>
<?php

class piece 
{
    protected $type = null;
    
    protected static $images = array(
    'K' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/king.png',
    'Q' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/queen.png',
    'B' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/bishop.png',
    'N' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/knight.png',
    'R' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/rook.png',
    'P' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/pawn.png',
    'k' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/king.png',
    'q' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/queen.png',
    'b' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/bishop.png',
    'n' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/knight.png',
    'r' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/rook.png',
    'p' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/pawn.png'
);

    public function __construct($type)
    {
        $this->type = $type;
    }

    public function __toString()
    {
        {
        return '<img src="' . static::$images[$this->type] . '"/>';
        }
    }
}

class field
{
    protected $x_coord = null;
    
    protected $y_coord = null;
    
    protected $piece = null;

    public function __construct($x, $y, $piece = null)
    {
        $this->x_coord = $x;   
        $this->y_coord = $y;
        $this->piece = $piece;
    }

    protected function isDark()
    {
        if(($this->x_coord % 2) == ($this->y_coord % 2))
        {
            return false;
        }
        else
        {
            return true;
        }
    }

    public function __toString()
    {
        if($this->isDark())
        {
            return '<div class="dark">' . $this->piece . '</div>'; // enhance this
        }
        else
        {
            return '<div class="light">' . $this->piece . '</div>';
        }
    }
}

$black_pawn = new piece('p');
$white_pawn = new piece('P');
$white_queen = new piece('Q');
$white_king = new piece('K');
$white_r = new piece('b');

// echo $black_pawn;
// echo $white_queen;

// loop i and loop j



$a1 = new field(1, 1, $black_pawn);
$b1 = new field(2, 1, $white_queen);
$c1 = new field(4, 1, $black_pawn);
$d1 = new field(5, 1, $black_pawn);
$e1 = new field(6, 1, $black_pawn);
$f1 = new field(3, 1, $black_pawn);
$g1 = new field(7, 1, $black_pawn);
$h1 = new field(8, 1, $black_pawn);

$a2 = new field(1, 2, $white_pawn);
$b2 = new field(2, 2, $white_pawn);
$c2 = new field(3, 2, $white_pawn);
$d2 = new field(4, 2, $white_pawn);
$e2 = new field(5, 2, $white_pawn);
$f2 = new field(6, 2, $white_pawn);
$g2 = new field(7, 2, $white_pawn);
$h2 = new field(8, 2, $white_pawn);

echo $a1;
echo $b1;
echo $c1;
echo $d1;
echo $e1;
echo $f1;
echo $g1;
echo $h1;

echo $a2;
echo $b2;
echo $c2;
echo $d2;
echo $e2;
echo $f2;
echo $g2;
echo $h2;
