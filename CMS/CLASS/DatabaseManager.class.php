<?php

class DatabaseManager{
    
    static public function getConnection() {
        
        $conn = @new mysqli(DB_SERVER, DB_USERNAME, DB_PW, DB_DB);
        
        if(mysqli_connect_errno()){
            
            $conn_errno = mysqli_connect_errno();
            $conn_error = mysqli_connect_error();
            
            LogFile::AddLog("Nastąpił błąd połączenia numer [$conn_errno] z bazą danych: $conn_error", __LINE__, __FILE__);
            exit();
            
        }
        else{
            
            $conn->query("SET NAMES 'utf8'");
            return $conn;
            
        }
        
    }
    
    static public function SelectBySQL($SQL){
        
        $conn = self::getConnection();
        $SQL = $conn->real_escape_string($SQL);
        $result = $conn->query($SQL);
        
        
        if(!$result){
           LogFile::AddLog("Wystąpił błąd połączenia z bazą danych!", __LINE__, __FILE__); 
           return false;
        }
        else{
            $resultArray = Array();
            while(($row = $result->fetch_array(MYSQLI_ASSOC)) !== NULL){
                $resultArray[] = $row;
                
            }
        }
        
        if(count($resultArray) > 0){
            return $resultArray;
        }
        else{
            LogFile::AddLog("Zapytanie bazodanowe zwróciło pusty wynik!", __LINE__, __FILE__);
            return false;
        }
        
        mysqli_close($conn);
    }
    
    static public function SelectData($TABLE, $COLUMNS = Array("*"), $WHERE = Array(), $LOGIC_OPER = "=", $OPER = "AND"){
        $conn = self::getConnection();
        $SQL = "SELECT ";
        if(count($COLUMNS) == 1){
            $SQL .= $COLUMNS[0];
        }
        else{
            foreach($COLUMNS as $column){
                $SQL .= $column.",";
            }
        }
        
        $SQL = rtrim($SQL, ',');
        $SQL .= " FROM {$TABLE}";
        
        if(count($WHERE) > 0){
            $SQL .= " WHERE ";
            
            foreach($WHERE as $key => $val){
                $SQL .= $key.$LOGIC_OPER."'".$val."' ".$OPER." ";
            }
            
            $SQL = substr($SQL, 0, strlen($SQL)-(strlen($OPER)+2));
        }
        $result = $conn->query($SQL);
        
        
        if(!$result){
           LogFile::AddLog("Wystąpił błąd połączenia z bazą danych!", __LINE__, __FILE__); 
           return false;
        }
        else{
            $resultArray = Array();
            while(($row = $result->fetch_array(MYSQLI_ASSOC)) !== NULL){
                $resultArray[] = $row;
                
            }
        }
        
        if(count($resultArray) > 0){
            return $resultArray;
        }
        else{
            LogFile::AddLog("Zapytanie bazodanowe zwróciło pusty wynik!", __LINE__, __FILE__);
            return false;
        }
        
        mysqli_close($conn);
    }
    
}

?>