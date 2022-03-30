<?php

$con = mysqli_connect("localhost", "root", "", "d200060");

if (mysqli_connect_errno()) {
    echo "Falha ao se conectar ao MySQL: " . mysqli_connect_erro();
} else {
    mysqli_select_db($con, "d200060");
}

?>