<?php

class Article{

    private $id;
    private $titre;
    private $contenu;
    private $datePublication;
    private $auteur;

    public function __construct($id,$titre,$contenu,$datePublication,$auteur)
    {
        $this->id=$id;
        $this->titre=$titre;
        $this->contenu=$contenu;
        $this->datePublication=$datePublication;
        $this->auteur=$auteur;

    }
    public function getId(){
        return $this->id;
    }
public function getTitre(){
    return $this->titre;
}
public function getContenu(){
    return $this->contenu;
}
public function getDatePublication(){
    return $this->datePublication;
}
public function getAuteur(){
    return $this->auteur;
}

public function setId(){
    return $this->id;
}
public function setTitre(){
return $this->titre;
}
public function setContenu(){
return $this->contenu;
}
public function setDatePublication(){
return $this->datePublication;
}
public function setAuteur(){
return $this->auteur;
}

}