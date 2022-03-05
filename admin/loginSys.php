<?php 
    $db = mysqli_connect('localhost', 'root', '', 'lsystem');

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        session_start();

        $name = $_POST['name'];
        $password = $_POST['password'];

        $sqlName = mysqli_query($db, "SELECT * from login WHERE name='$name' and name='$name'");
        $sqlPass = mysqli_query($db, "SELECT * from login WHERE password='$password' and password='$password'");


        /*Validación formulario*/

        if($name = mysqli_fetch_assoc($sqlName) and $password = mysqli_fetch_assoc($sqlPass)){
            echo 'Bienvenido';
        }else{
            echo 'no';
            
        }
    }
?>