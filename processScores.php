<?php
date_default_timezone_set('America/New_York');
include("Team.php");

$teamName = isset($_GET['teamName']) ? $_GET['teamName'] : '';
$ht1 = isset($_GET['home1']) ? $_GET['home1'] : 0;
$at1 = isset($_GET['away1']) ? $_GET['away1'] : 0;
$ht2 = isset($_GET['home2']) ? $_GET['home2'] : 0;
$at2 = isset($_GET['away2']) ? $_GET['away2'] : 0;
$ht3 = isset($_GET['home3']) ? $_GET['home3'] : 0;
$at3 = isset($_GET['away3']) ? $_GET['away3'] : 0;

// Check if the team name was provided
if ($teamName === '') {
    echo "Error: Team name is required.";
    exit;
}

// Instantiate the Team object with the team name
$homeTeam = new Team($teamName);

// Call finalScore for each match result
$homeTeam->finalScore($ht1, $at1);
$homeTeam->finalScore($ht2, $at2);
$homeTeam->finalScore($ht3, $at3);


// Output the goal average to the screen
echo "Goal average for " . htmlspecialchars($teamName) . ": " . $homeTeam->getGoalAverage();
?>
