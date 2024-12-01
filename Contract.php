<?php

class Contract {

    private Player $_player;
    private Team $_team;
    private DateTime $_startSaison;

    public function __construct(Player $player, Team $team, string $startSaison){

        $this -> _player = $player;
        $player -> addContract($this);
        $this -> _team = $team;
        $team -> addContract($this);
        $this -> _startSaison = new DateTime($startSaison);

    }

    public function getPlayer(){

        return $this -> _player;

    }

    public function setPlayer(){

        return $this -> _player;

    }

    public function getTeam(){

        return $this -> _team;

    }

    public function setTeam(){

        return $this -> _team;

    }

    public function getStartSaison(){
    
        return $this->_startSaison;
    
    }
    
    public function setStartSaison(){
    
        return $this-> _startSaison;
    
    }


}

