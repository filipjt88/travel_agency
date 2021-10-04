<div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-2">
                    <h1>REGISTER</h1>
                    <div class="breadcrumbs">
                        <a href="login.php">Login</a><i class="fa fa-angle-double-right"></i><span>Privacy Policy</span>
                    </div>
                    <!-- Contact Form -->
                    <form id="contactForm" action="register.php" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control-input" name="first_name">
                            <label class="label-control" for="cname">First name</label>
                        </div>
                        <?php if(isset($first_name_error)): ?>
                            <p class="alert alert-danger bg-light text-danger p-1 d-inline-block"><?php echo $first_name_error; ?></p>
                        <?php endif; ?>
                        <div class="form-group">
                            <input type="text" class="form-control-input" name="last_name" id="cname">
                            <label class="label-control" for="cname">Last name</label>
                        </div>
                        <?php if(isset($last_name_error)): ?>
                            <p class="alert alert-danger bg-light text-danger p-1 d-inline-block"><?php echo $last_name_error; ?></p>
                        <?php endif; ?>
                        <div class="form-group">
                            <input type="email" class="form-control-input" name="email" id="cemail">
                            <label class="label-control" for="cemail">Email</label>
                        </div>
                        <?php if(isset($email_error)): ?>
                            <p class="alert alert-danger bg-light text-danger p-1 d-inline-block"><?php echo $email_error; ?></p>
                        <?php endif; ?>

                        <div class="form-group">
                            <input type="password" class="form-control-input" name="password" id="cemail">
                            <label class="label-control" for="cemail">Password</label>
                        </div>

                        <?php if(isset($password_error)): ?>
                            <p class="alert alert-danger bg-light text-danger p-1 d-inline-block"><?php echo $password_error; ?></p>
                        <?php endif; ?>
                        <div class="form-group">
                            <input type="password" class="form-control-input" name="password_repeat" id="cemail">
                            <label class="label-control" for="cemail">Password repeat</label>
                        </div>
                        <?php if(isset($password_repeat_error)): ?>
                            <p class="alert alert-danger bg-light text-danger p-1 d-inline-block"><?php echo $password_repeat_error; ?></p>
                        <?php endif; ?>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">REGISTER</button>
                        </div>

                        <?php if(isset($password_do_not_match)): ?>
                            <p class="alert alert-danger bg-light text-danger p-1 d-inline-block"><?php echo $password_do_not_match; ?></p>
                        <?php endif; ?>
                    </form>

                    <?php if(isset($msg)): ?>
                            <p class="alert alert-success bg-light text-success text-center p-1"><?php echo $msg; ?></p>
                        <?php endif; ?>
                    <!-- end of contact form -->
                </div> 
            </div> 
        </div> 
    </div>