<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "xyzchecker";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("mysql error: ". mysqli_connect_error());  
    }  
?>  