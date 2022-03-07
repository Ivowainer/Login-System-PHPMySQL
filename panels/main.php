<?php 
    include_once '../includes/header.php';
    session_start();
    if(isset($_SESSION['User'])){?>
        <!-- <h1>d</h1>
        <a href="../logout.php?logout">Logout</a> -->
        <div class="navbar navbar-dark bg-primary px-5">
            <a href="#" class="navbar-brand">Login System</a>
            <a href="../logout.php?logout" class="btn btn-sm btn-outline-dark">Logout</a>
        </div>

        <div class="container">
            
        </div>
<!-- No hay ninguna sesión abierta -->
<?php
} else{
    ?>

    <div class="alert alert-danger text-center">
        <h1>NO HAY NINGUNA SESIÓN ABIERTA</h1>
    </div>

<?php
}
?>