<?php
class Team
{
    private $name="";
    private $totalGoals=0;
    private $totalGames=0;
    Private $totalPoints=0;

    public function __construct($parm1)
    {
        $this->name = $parm1;
    }

    public function finalScore($ht, $at)
    {
        $this->totalGames += 1;
        
        if ($ht > $at) {
            $this->totalPoints += 3;
        }
   
        elseif ($ht < $at) {
            $this->totalPoints += 0;

        }
        else {
            $this->totalPoints += 1;
        }
        $this->totalGoals += $ht;
    }

    public function getPoints()
    {
        return $this->totalPoints;
    }

    public function getGoalAverage()
    {
        return $this->totalGoals/$this->totalGames;
    }
}
?>
