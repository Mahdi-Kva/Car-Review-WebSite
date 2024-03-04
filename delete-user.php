<?php
include 'env.php';

// 1. connect to db
$dbc = new mysqli($host, $user, $pass);
$dbc -> select_db($db);
// check connection
if ($dbc -> connect_error) {
    die("Connection failed: " . $dbc -> connect_error);
}
$id = $_GET['id'];
var_dump($id);

// 2. execute query
$sql = "DELETE FROM user WHERE id = $id";
$result = $dbc -> query($sql);

if ($result) {
    echo "query executed successfully";
} else {
    echo "Error: " . $sql . "<br>" . $dbc -> error;
}

// 3. close connection
$dbc -> close();
?>
