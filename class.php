<?php

// Edition de la classe personnage avec les différents attributs

class Employe {
    public $name;
    public $surname;
    public $position;
    public $sexe;
    public $birthdate;
    private $birthplace;
    private $wage;
    private $contract;
    

// Création de la fonction constructor

public function __construct (
     $name,
     $surname,
     $position,
     $sexe,
     $birthdate,
     $birthplace,
     $wage,
     $contract,

) {

    $this->name = $name;
    $this->surname = $surname;
    $this->position = $position;
    $this->sexe = $sexe;
    $this->birthdate = $birthdate;
    $this->birthplace = $birthplace;
    $this->wage = $wage;
    $this->contract = $contract;

}


// Set + get for birthplace 

public function getBirthplace() {
    return $this->birthplace;
}

public function setBirthplace($x) {
    $this->birthplace = $x;
}


// Set + get for wage 

public function getWage()  {
    return $this->wage;
}

public function setWage($y) {
    $this->wage = $y;
}


// Set + get for items 

public function getItems () {
    return $this->contract;
}

public function setItems ($z) {
    $this->contract = $z;
}

}

?>