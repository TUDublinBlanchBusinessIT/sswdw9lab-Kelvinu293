<?php
date_default_timezone_set('America/New_York');

include("Team.php");

$myTeam = new Team("Tigers");

$myTeam->finalScore(2,2);

echo "That worked";
echo "<br>Total points: " . $myTeam->getPoints(); 

$myTeam->finalScore(3,2);
echo "<br>Total points: " . $myTeam->getPoints(); 
echo "<br>Goal average: " . $myTeam->getGoalAverage();
?>
