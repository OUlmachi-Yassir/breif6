<?php
    $serveur="localhost";
    $nomBD="dataApp";
    $login="root";
    $password="";

    $conn = mysqli_connect($serveur, $login, $password, $nomBD);

    if(mysqli_connect_errno()){
      echo "Failed to connect!";
      exit();
    }
    

?> 