<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "demo");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Escape user inputs for security

$TPIRQ011 = $mysqli->real_escape_string($_REQUEST['TPIRQ011']);


$sql = "INSERT INTO irq_answers (TPIRQ009) VALUES ('$TPIRQ011')";
if($mysqli->query($sql) === true){
    header("location: TPIRQ012.php", true);exit;
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();
?>  