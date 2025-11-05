<?php

include("team.php");

$myTeam = new Team("Tigers");

$myTeam->finalScore(2,2);
$myTeam->finalScore(3,2);
$myTeam->finalScore(0,2);
$myTeam->finalScore(4,2);
$myTeam->finalScore(3,3);

echo "That worked";
echo "\n Goal Average is" . $myTeam->getGoalAverage()



?>