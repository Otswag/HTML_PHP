<?php
function logout(){
   
session_start();
    
    if($_SESSION){
        session_destroy();
        header("location: ../index.php);
        exit();
    }
   else{
        header("location: ../index.php?error=You are not logged in");
        exit();
   }
}

logout();
?>
