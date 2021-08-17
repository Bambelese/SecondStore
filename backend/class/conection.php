<?php
    Class Connection{
        public function getConnection(){
            try {
                $conn = new PDO("sqlsrv:server = tcp:secondstore.database.windows.net,1433; Database = SecondStore", "bambelese", "Angelo2324");
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch (PDOException $e) {
                print("Error connecting to SQL Server.");
                die(print_r($e));
            }
        }
    }

?>