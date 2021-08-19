<?php 

require_once("../models/users.php");

$user = new User();

if($_POST){
    $user->email=$_POST['email'];
    $user->pass=$_POST['pass'];
    $cd=$user->VerifyLogin();

    if(empty($cd)){
        echo ("Datos incorrectos");
    }else{
        session_start();
        $username=$cd[1];
        $_SESSION['username']=$username;
        header("location:../index.php");
    }
}

    //$cd=$user->VerifyLogin();
//
    //if(empty($cd)){
    //    echo ("Datos incorrectos");
    //}else{
    //    echo "$cd[1]";
    //    //header("location:index.php");
    //}
    //
    //$cd=$user->VerifyLogin();
    //print_r ($cd[0]);
    //if($cd===1){
    //    echo "funciona";
    //}else{
    //    echo "no";
    //}

//$connectionInfo = array("UID" => "bambelese", "pwd" => "Angelo2324", "Database" => "SecondStore", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
//$serverName = "tcp:secondstore.database.windows.net,1433";
//$conn = sqlsrv_connect($serverName, $connectionInfo);
//
//$query = "{call sp_verifyLogin (?,?)}";
//$params = array(array("fonscia_cob1905@hotmail.com",SQLSRV_PARAM_IN),
//                array("root",SQLSRV_PARAM_IN));
//
//$stmp=sqlsrv_prepare($conn, $query, $params);
//
//if(sqlsrv_execute( $stmp ) === false){
//    die( print_r( sqlsrv_errors(), true));
//} 
//while( $row = sqlsrv_fetch_array( $stmp, SQLSRV_FETCH_NUMERIC) ) {
//    echo $row[0].", ".$row[1]."<br />";
//}

?>