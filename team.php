<?php
class Team {
   
    private $teamName;
    private $totalPoints;
    private $totalGoals;
    private $totalGames;

    
    public function __construct($name) {
        $this->teamName = $name;
        $this->totalPoints = 0;
        $this->totalGoals = 0;
        $this->totalGames = 0;
    }

    
    public function finalScore($Parm1, $Parm2) {
        
        $this->totalGoals += $Parm1;

        
        $this->totalGames += 1;

        
        if ($Parm1 > $Parm2) {
            $this->totalPoints += 3;
        } 
        elseif ($Parm1 == $Parm2) {
             $this->totalPoints += 1;
        } else{
            
        }
        
    }

  
    

    
}
?>
