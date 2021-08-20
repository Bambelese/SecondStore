<?php 
    
    class Product{
        public $codProducto;
        public $codCategoria;
        public $product;
        public $codCliente;
        public $precio;
        public $cantidad;
        public $descripcion;
        public $img1;
        public $img2;
        public $img3;


        public function Create(){
            $connectionInfo = array("UID" => "bambelese", "pwd" => "Angelo2324", "Database" => "SecondStore", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
            $serverName = "tcp:secondstore.database.windows.net,1433";
            $conn = sqlsrv_connect($serverName, $connectionInfo);

            $query = "{call sp_createProduct(?,?,?,?,?)}";
            $params = array(array($this->codCategoria,SQLSRV_PARAM_IN),
                            array($this->product,SQLSRV_PARAM_IN),
                            array($this->codCliente,SQLSRV_PARAM_IN),
                            array($this->precio,SQLSRV_PARAM_IN),
                            array($this->cantidad,SQLSRV_PARAM_IN));

            $stmt= sqlsrv_query($conn, $query,$params);

            sqlsrv_close($conn);
        }

        public function ViewProductsCategory(){
            $connectionInfo = array("UID" => "bambelese", "pwd" => "Angelo2324", "Database" => "SecondStore", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
            $serverName = "tcp:secondstore.database.windows.net,1433";
            $conn = sqlsrv_connect($serverName, $connectionInfo);

            $query = "{call sp_viewProductsCategory(?)}";
            $params = array(array($this->codCategoria,SQLSRV_PARAM_IN));
            $stmt= sqlsrv_query($conn, $query,$params);

            $obj = array();
            $i=0;

            while($product = sqlsrv_fetch_object($stmt)){
                $obj[$i]=$product;
                $i++;
            }

            return $obj;
            sqlsrv_close($conn);
        }
    }
?>