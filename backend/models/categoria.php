<?php 
    class Categoria{
        
        public $codCategory;
        public $catrgory;
        public $description;

        public function View(){
            $connectionInfo = array("UID" => "bambelese", "pwd" => "Angelo2324", "Database" => "SecondStore", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
            $serverName = "tcp:secondstore.database.windows.net,1433";
            $conn = sqlsrv_connect($serverName, $connectionInfo);

            $query = "{call sp_viewCategories}";
            $stmt= sqlsrv_query($conn, $query);

            $obj = array();
            $i=0;

            while( $category = sqlsrv_fetch_object($stmt)){
                $obj[$i]=$category;
                $i++;
            }
            return $obj;
        }
    }
?>