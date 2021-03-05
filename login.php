<?php require_once 'controllers/authController.php'; ?>
<?php $title = 'Login | UJewels'; ?>
<?php $currentPage = 'login'; ?>
<?php include('screens/head.php'); ?>
<?php include('screens/navbar.php'); ?>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-4 form-div login">
            <form action="login.php" method="post">
            <h3 class="text-center">Login</h3>
           
            <?php if(count($errors) > 0): ?>
                 <div class="alert alert-danger">
                   <?php foreach($errors as $error): ?>
                      <li><?php echo $error; ?></li>
                    <?php endforeach; ?>
                 </div>
                <?php endif; ?>

            <div class="form-group">
                <label for="username">Username or Email</label>
                <input type="text" name="username" class="form-control form-control-lg">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control form-control-lg">
            </div>

            <div class="form-group">
                <button type="submit" name="login-btn" class="btn btn-primary btn-block btn-lg">Login</button>
             </div>
            <p class="text-center"> Not a member? <a href="signup.php"> Sign Up</a></p>

            </form>
            </div>
        </div>
    </div>

</body>


<?php include_once 'screens/footer.php'?>