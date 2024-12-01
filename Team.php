<?php

class Team {

    private string $_name;
    private Country $_country;
    private DateTime $_fondation;
    private array $_contracts;

    public function __construct(string $name, Country $country, string $fondation) {

        $this -> _name = $name;
        $this -> _country = $country;
        $country -> addTeam($this);
        $this -> _fondation = new DateTime($fondation);
        $this -> _contracts = [];

    }

    public function getName(){

        return $this -> _name;
        
    }

    public function setName($name){

        return $this -> _name;
        
    }

    public function getCountry(){

        return $this -> _country;
        
    }

    public function setCountry($country){

        return $this -> _country;

    }

    public function getFondation($fondation){

        return $this -> _fondation;
        
    }

    public function setFondation(){

        return $this -> _fondation = $fondation;
        
    }

    public function addContract($contract){

        $this -> _contracts[] = $contract;
    }


    public function listPlayer(){

        $resultat = "<div class=card style= 'background-color: rgb(14, 10, 86)'>"."<div class=header>".$this->getName()."<div class=category>".$this->_country->getName()." - ". $this->_fondation->format("Y")."</div></div><div class=element><ul>";

        foreach ($this -> _contracts as $contract){

            $player = $contract -> getPlayer();

            $resultat .= "<li><p>".$player->getFirstName() . " " . $player->getName() . " " . "(" . $player->agePlayer() . "ans)</p></li>";
        }

        $resultat .= "</ul></div></div>";

        return $resultat;

    }

}
        