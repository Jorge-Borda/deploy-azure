<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:jorgedata.database.windows.net,1433; Database = jorgedb", "jorgebase", "Papaseca100");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "jorgebase", "pwd" => "Papaseca100", "Database" => "jorgedb", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:jorgedata.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>