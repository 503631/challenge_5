<?php
    $sql = "INSERT INTO login_test (name, password) 
        VALUES ('$name', '$hashedPassword')";


    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();

