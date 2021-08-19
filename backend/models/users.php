<?php 
     class User{
        public $name;
        public $lastName;
        public $email;
        public $pass;

        public $outNameU=0;
        
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

            sqlsrv_close($conn);
        }

        public function VerifyLogin(){
            $connectionInfo = array("UID" => "bambelese", "pwd" => "Angelo2324", "Database" => "SecondStore", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
            $serverName = "tcp:secondstore.database.windows.net,1433";
            $conn = sqlsrv_connect($serverName, $connectionInfo);

            $array = array();

            $query = "{call sp_verifyLogin (?,?)}";

            $params = array(array($this->email,SQLSRV_PARAM_IN),
                            array($this->pass,SQLSRV_PARAM_IN));

            //$params = array(array("fonscia_cob1905@hotmail.com",SQLSRV_PARAM_IN),
            //array("root",SQLSRV_PARAM_IN));

            $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );

            $stmp = sqlsrv_query($conn, $query, $params,$options);
            $stmt = sqlsrv_query($conn, $query, $params);

            $row_count = sqlsrv_num_rows( $stmp );//OBTIENE LA CANTIDAD DE FILAS

            if ($row_count == false){
                return "No hay fila";
            }else{
                while( $row = sqlsrv_fetch_array( $stmp)){
                    $array[]=$row['id'];
                    $array[]=$row['nameU'];
                }
                return $array;
            }
            sqlsrv_close($conn);
        }
    }

?>