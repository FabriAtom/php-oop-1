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

    function __construct($title, $actor, $regist, $vote)
    {
        $this->title = $title;
        $this->regist = $regist;
        $this->actor = $actor;
        $this->vote = $vote; 
    }
    function setVote($vote) {
        if($vote >=0 && $vote <=10) {
            $this->vote = $vote;
        } else {
            $this->vote = 'il voto non è corretto';
        }
    }
}

$Amelie = new movie('Il favoloso mondo di Amélie', 'Audrey Tautou','Jean-Pierre Jeunet', -2);
$Amelie->setVote(-2);
var_dump($Amelie);

$Pallottole = new movie('pallottole cinesi','Tom Dey','Jackie Chan', 7/8);
$Pallottole->setVote(8);
var_dump($Pallottole);

$Impossible = new movie('Mission Impossible','Brian De Palma','Tom Cruise', 9);
$Impossible->setVote(9);
var_dump($Impossible);

$Mercenari = new movie('I Mercenari','Sylvester Stallone','Sylvester Stallone', 9);
$Mercenari->setVote(9);
var_dump($Mercenari);
?>
    
</body>
</html>