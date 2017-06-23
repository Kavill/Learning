<?php

class deanery extends students{
    
    public function getStudentAlbumNameFn(){
        
        return "Nazwa albumu studenta to".parent::getStudentAlbum();
        
    }
    
    public function getStudentAlbumNameVar(){
        
        return "Nazwa albumu studenta to ".$this->albumNumber;
        
    }
    
}

class students{
    
    public $albumNumber;
    private $studentName;
    protected $peselNumber;
    
    public function getStudentName(){
        
        return $this->studentName;
        
    }
    
    public function getStudentPesel(){
        
        return $this->peselNumber;
        
    }
    
    public function setStudentPesel($pesel){
        
        $this->peselNumber = $pesel;
        
    }
    
    public function getAlbumNumber(){
        
        return $this->albumNumber;
        
    }
    
}

$obiekt = new deanery;
$obiekt->albumNumber = 4154;
$obiekt->getStudentAlbumNameFn();

?>