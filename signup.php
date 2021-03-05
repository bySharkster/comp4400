<?php include_once 'controllers/authController.php'; ?>
<?php $title = 'Sign Up | UJewels'; ?>
<?php $currentPage = 'signup'; ?>
<?php include('screens/head.php'); ?>
<?php include('screens/navbar.php'); ?>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-4 form-div">   
                <section class="signup-form">
                <h3 class="text-center">Register</h3>
                <form action="signup.inc.php" method="post">

                        <?php if(count($errors) > 0): 
                            ?>
                        <div class="alert alert-danger">
                        <?php foreach($errors as $error): 
                            ?>
                            <li><?php echo $error; 
                            ?></li>
                            <?php endforeach; 
                            ?>
                        </div>
                        <?php endif; 
                        ?>

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" placeholder="user123"value="<?php echo $username; ?>" class="form-control form-control-lg">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" placeholder="youremail@email.com" value="<?php echo $email; ?>" class="form-control form-control-lg">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" placeholder="Password" class="form-control form-control-lg">
                    </div>
                    <div class="form-group">
                        <label for="passwordConf">Confirm Password</label>
                        <input type="password" name="password" placeholder="Confirm Password" class="form-control form-control-lg">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="signup-btn" class="btn btn-primary btn-block btn-lg">Sign Up</button>
                    </div>
                    <p class="text-center"> Already a member?<a href="login.php"> Log In</a></p>

                </form>
                </section>
                </div>
            </div>
        </div>

    </body>

<?php include_once 'screens/footer.php'?>