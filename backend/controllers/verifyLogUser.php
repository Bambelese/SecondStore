<?php 
    require_once("../models/users.php");

    $user = new User();
    
    if($_POST){
        $user->email=$_POST['email'];
        $user->pass=$_POST['contra'];
        $cd=$user->VerifyLogin();
        echo "$cd";
    }
    //$f=$user->VerifyLogin();
    //echo $f;
    //print_r($f);
    //echo "prueba";
        //$outNameU=0;
        //$connectionInfo = array("UID" => "bambelese", "pwd" => "Angelo2324", "Database" => "SecondStore", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
        //$serverName = "tcp:secondstore.database.windows.net,1433";
        //$conn = sqlsrv_connect($serverName, $connectionInfo);
//
        //$query = "{call sp_verifyLogin (?,?,?)}";
        //$params = array(array("fonscia_cob1905@hotmail.com",SQLSRV_PARAM_IN),
        //                array("root",SQLSRV_PARAM_IN),
        //                array(&$outNameU,SQLSRV_PARAM_OUT,null, SQLSRV_SQLTYPE_BIGINT));
//
        //$stmp=sqlsrv_prepare($conn, $query, $params);
        //sqlsrv_execute( $stmp );
    //if(sqlsrv_execute( $stmp ) === false){
    //    die( print_r( sqlsrv_errors(), true));
    //}

        echo "$outNameU";
    
?>