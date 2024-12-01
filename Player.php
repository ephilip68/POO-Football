<?php

class Player {

    private string $_firstName;
    private string $_name;
    private DateTime $_birthday;
    private Country $_country;
    private array $_contracts;

    public function __construct(string $firstName, string $name, string $birthday, Country $country) {

        $this -> _firstName = $firstName;
        $this -> _name = $name;
        $this -> _birthday = new dateTime ($birthday);
        $this -> _country = $country;
        $this -> _contracts = [];

    }

    public function getFirstName(){

        return $this -> _firstName;
        
    }

    public function setFirstName($firstName){

        return $this -> _firstName;

    }

    public function getName(){

        return $this -> _name;
        
    }

    public function setName($name){

        return $this -> _name;
        
    }

    public function getBirthday(){

        return $this -> _birthday;
        
    }

    public function setBirthday($birthday){

        return $this -> _birthday;
        
    }

    public function getCountry(){

        return $this -> _country;
        
    }

    public function setCountry($country){

        return $this -> _country;
        
    }

    public function addContract(Contract $contract){
    
        $this->_contracts[] = $contract;

    }

    public function agePlayer(){

        $diff = $this->_birthday->diff(new DateTime());

        return $diff->y;

    }

    public function listTeam(){

        $resultat = "<ul>";

        foreach ($this -> _contracts as $contract) {

            $player = $contract->getPlayer();

            $resultat .= $player->getFirstName() . " " . $player->getName() . "<br><br><li>" . $this->_country->getName() . " - " . $player->agePlayer() . " ans (" . $contract->getTeam()->getName() . " " .  $contract->getStartSaison()->format("Y") . ")</li><br>";

        }

        $resultat .= "</ul>";

        return $resultat;

    }

    public function listContracts(){

        $resultat = "<div class=card style= 'background-color: rgb(8, 107, 13)'>"."<div class=header>".$this->getName()."<div class=category>".$this->_country->getName()." - ". $this->agePlayer(). " ans</div></div><div class=element><ul>";

        foreach ($this -> _contracts as $contract) {

            $player = $contract->getPlayer();

            $resultat .= "<li><p>".$contract->getTeam()->getName(). " (" .$contract->getStartSaison()->format("Y"). ")</p></li>";

        }

        $resultat .= "</ul></div></div>";

        return $resultat;

    }

}