<?php
session_start();
if ($_SESSION['true'] != "true") {
    header("Location: ../login.html");
}
