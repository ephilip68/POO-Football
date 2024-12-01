<?php

class Country {

    private string $_name;
    private array $_players;
    private array $_teams;

    public function __construct(string $name) {

        $this -> _name = $name;
        $this -> _players = [];
        $this -> _teams = [];

    }

    public function getName(){

        return $this -> _name;
        
    }

    public function setName(){

        return $this -> _name;

    }

    public function addTeam(Team $team){

        $this->_teams[] = $team;

    }

    public function addPlayer(Player $player){

        $this->_players[] = $player;

    }

    public function listTeam(){

        $resultat = "<div class=card style= 'background-color: rgb(196, 18, 18)'>"."<div class=header>".$this->getName()."</div><div class=element><ul>";

        foreach ($this -> _teams as $team){

            $resultat .= "<li><p>".$team->getName()."</p></li>";

        }

        $resultat .= "</ul></div></div>";

        return $resultat;

    }

}
        