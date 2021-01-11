<?php
 $name    = $_POST['name'];
 $password = $_POST['password'];

 $hashedPassword = hash('sha256', $password);
