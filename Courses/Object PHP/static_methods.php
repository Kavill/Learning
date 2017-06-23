<?php

    class students {
        
        static public $studentAge;
        static $studentGroup;
        
        public function getStudentAge(){
            return self::$studentAge;
        }
        
        static public function setStudentAgeStatic($age){
            self::$studentAge = $age;
        }
        
    }

echo "Sposób I:<br/>";
students::$studentAge = 24;
echo "Wiek studenta = <b>".Students::$studentAge."</b> lata. <br/><br/>";

echo "Sposób II:<br/>";
students::$studentAge = 15;
$obiekt = new students;
echo "Wiek studenta = <b>".$obiekt->getStudentAge()."</b> lata. <br/><br/>";

echo "Sposób III:<br/>";
students::setStudentAgeStatic(38);
echo "Wiek studenta = <b>".Students::$studentAge."</b> lata.";

?>