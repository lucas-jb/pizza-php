<?php
    $conn = mysqli_connect('localhost', 'lucas', 'lucas', 'lucas-jb-pizzas');

    if(!$conn){
        echo 'Connection error: ' . mysqli_connect_error();
    }