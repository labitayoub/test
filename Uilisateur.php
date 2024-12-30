<?php

class Utilisteur {

private $id;
private $nom;
private $email;


public function __construct($id,$nom,$email)
{
    $this->nom =$nom;
    $this->email =$email;

}

public function getId(){
    return $this->id;
}
public function getNom(){
    return $this->nom;
}
public function getEmail(){
    return $this->email;

public function setId(){
    return $this->id;
}
public function setNom(){
    return $this->nom;
}
public function setEmail(){
    return $this->email;
}


}