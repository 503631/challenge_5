<?php
$sql = "SELECT * FROM login_test";
// $sql_newe = "SELECT password FROM login_test where name = " + $_SESSION['name'];
$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(); // get result
// $users = [];
// $passwords = [];
// function combine($v1, $v2)
// {
//     return [$v1 => $v2];
// }

//     array_push($users, $row['name']);
//     array_push($passwords, $row['password']);
//         $name = $row['name'];
//     $password = $row['password'];

// $new = array_map("combine", $users, $passwords);



foreach ($result as $key => $row) {

    $name = $row['name'];
    $password = $row['password'];
}

