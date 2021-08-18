<?php
    
    // SQL Server Extension Sample Code:
    $connectionInfo = array("UID" => "bambelese", "pwd" => "Angelo2324", "Database" => "SecondStore", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
    $serverName = "tcp:secondstore.database.windows.net,1433";
    $conn = sqlsrv_connect($serverName, $connectionInfo);
    
    if($conn){
        echo "connected";
    }else{
        echo "error";
    }

?>