<?php 
    require './admin/databases.php';

    $errores = [];
    $name = '';
    $password = '';

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $name = $_POST['name'];
        $password = $_POST['password'];

        /* Validación de formulario */
        if(strlen($name) < 3){
            $errores[] = 'El nombre debe tener más de 3 caracteres';
        }
        if(strlen($password) < 6){
            $errores[] = 'La contraseña debe tener más de 6 caracteres';
        }

        //Si no hay errores registrados en el array, se guarda en la base de datos
        if(empty($errores)){
            $query = "INSERT INTO login (name, password) 
            VALUES ('$name', '$password')";

            $resultado = mysqli_query($db, $query);

            if($resultado){
                header('Location: login.php?message=success');
            }
        }
    }
?>