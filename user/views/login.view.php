<div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-2">
                    <div class="breadcrumbs">
                        <a href="register.html">Register</a><i class="fa fa-angle-double-right"></i><span>Privacy Policy</span>
                    </div>

                    <!-- Contact Form -->
                    <form id="contactForm" action="login.php" method="POST">
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
                            <button type="submit" class="form-control-submit-button">SUBMIT MESSAGE</button>
                        </div>
                    </form>
                    <?php if(isset($wrong)): ?>
                            <p class="alert alert-secondary bg-light text-danger text-center p-1"><?php echo $wrong; ?></p>
                        <?php endif; ?>
                    <!-- end of contact form -->
                </div>
            </div>
        </div>
    </div>
    