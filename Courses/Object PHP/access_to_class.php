<?php

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

    $obiekt = new students;
    $obiekt->albumNumber = "4154";
    echo $obiekt->getAlbumNumber();
    echo"<br/>";
    $obiekt->setStudentPesel(38921232);
    echo $obiekt->getStudentPesel();

    

?>