<?php

    class students {
        
        public $studentName; //Zmienna członkowska/środowiskowa
        
        public function getStudentName() {
            
            return $this->studentName;
            
        }
        
    }

$obiekt = new students;
$obiekt->studentName = "John";
echo $obiekt->getStudentName();

?>