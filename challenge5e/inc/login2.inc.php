<?php

$user = $_POST['name'];
$sql = "SELECT * FROM login_test WHERE name='" . $user . "';";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(); // get result
$_SESSION['result'] = $result;
echo $result;

foreach ($result as $key => $row) {

    $name = $row['name'];
    $password = $row['password'];
}
?>