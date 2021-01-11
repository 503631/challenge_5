<?php
if($_SESSION['true'] = "true"){
    print "oke";
}
else if($_SESSION['true'] != true){
    header("Location: ../login.html");  
}