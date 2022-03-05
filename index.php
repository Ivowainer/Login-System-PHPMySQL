<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container"> <!-- d-flex vh-100 align-items-center justify-content-center -->
        <div class="card" style="width: 18rem;">
            <div class="card-header text-center">
                <p class="fs-5 m-0">Login System</p>
            </div>
            <div class="card-body"> 
                <form action="/" class="form" method="GET">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">@</span>
                        <input type="text" name="name" placeholder="Name" class="form-control">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">#</span>
                        <input type="password" name="password" placeholder="Password" class="form-control">
                    </div>

                    <div class="container p-0 d-flex justify-content-between align-items-center">
                        <input type="submit" value="Login" class="btn btn-primary">
                        <a href="register.php" class="pe-2 text-decoration-none">Register</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>