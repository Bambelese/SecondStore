<?php 
     class User{
        public $name;
        public $lastName;
        public $email;
        public $pass;
        
        public function Create(){
            $connectionInfo = array("UID" => "bambelese", "pwd" => "Angelo2324", "Database" => "SecondStore", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
            $serverName = "tcp:secondstore.database.windows.net,1433";
            $conn = sqlsrv_connect($serverName, $connectionInfo);
            
            $query = "{call sp_createUser (?,?,?,?)}";
            $params = array($this->name,$this->lastName,$this->email,$this->pass);

            $stmp=sqlsrv_prepare($conn, $query, $params);

            if(sqlsrv_execute( $stmp ) === false){
                die( print_r( sqlsrv_errors(), true));
            }
        }
    }

?>