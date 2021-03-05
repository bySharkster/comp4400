<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/bootstrap.css"/>
    <link rel="stylesheet" href="styles/style.css"/>

    <title> Home </title>

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-4 form-div login">
                <div class="alert alert-success">
                    You are logged
                </div>

                <h3> Welcome, Dude </h3>

                <a href="signup.php" class="logout">logout</a>
                <div class="alert alert-warning">
                You need to verify your account. 
                Sign in too your email account and click on the
                verification link we just emailed you at
                <strong>youremail@gmail.com</strong>
                </div>
           
                <button class="btn btn-block btn-lg btn-primary"> I am verified! </button>
            </div>
        </div>
    </div>

</body>

</html>