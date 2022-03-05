<?php 
    include 'includes/header.php';
    require 'admin/registerSys.php';
?>
                <p class="fs-5 m-0">Register System</p>
            </div>
            <div class="card-body"> 
                <form action="register.php" class="form" method="POST">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">@</span>
                        <input type="text" name="name" placeholder="Name" class="form-control" autocomplete="off">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">#</span>
                        <input type="password" name="password" placeholder="Password" class="form-control" autocomplete="off">
                    </div>

                    <div class="container p-0 d-flex justify-content-between align-items-center">
                        <input type="submit" value="Register" class="btn btn-primary">
                        <a href="login.php" class="pe-2 text-decoration-none">Back</a>

<?php include 'includes/footer.php' ?>