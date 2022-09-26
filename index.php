<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-OOP-1</title>
</head>


<body>
<?php

class movie {
    public $title;
    public $regist;
    public $actor;
    public $vote;

    function __construct($title, $actor, $regista, $vote);
    {
        $this->title = $title;
        $this->regist = $regist;
        $this->actor = $actor;
        $this->vote = $vote; 
    }
};
$Amélie = new movie('Il favoloso mondo di Amélie','Audrey Tautou','Jean-Pierre Jeunet', 8);
var_dump($Amélie);

$Pallottole = new movie('pallottole cinesi','Tom Dey','Jackie Chan', 7/8);
var_dump($Pallottole);

$Impossible = new movie('Mission Impossible''Brian De Palma','Tom Cruise' 9);
var_dump($Impossible);
?>
    
</body>
</html>