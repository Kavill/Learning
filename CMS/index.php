<?php

require_once('config.php');
    
echo "<pre>";

print_r(DatabaseManager::SelectBySQL("SELECT * FROM users"));

echo"</pre>";
    
?>