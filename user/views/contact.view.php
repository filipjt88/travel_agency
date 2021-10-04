            <div class="col-lg-6">
                <!-- Contact Form -->
                <form id="contactForm" action="user/contact.php" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control-input" name="full_name" id="cname">
                        <label class="label-control" for="cname">Full name</label>
                    </div>
                    <?php if(isset($full_name_error)): ?>
                        <p class="alert alert-danger bg-light text-danger p-1 d-inline-block"><?php echo $full_name_error; ?></p>
                    <?php endif; ?>
                    <div class="form-group">
                        <input type="email" class="form-control-input" name="email" id="cemail">
                        <label class="label-control" for="cemail">Email</label>
                    </div>
                    <?php if(isset($email_error)): ?>
                        <p class="alert alert-danger bg-light text-danger p-1 d-inline-block"><?php echo $email_error; ?></p>
                    <?php endif; ?>
                    <div class="form-group">
                        <textarea class="form-control-textarea" name="message" id="cmessage"></textarea>
                        <label class="label-control" for="cmessage">Your message</label><br>
                        <?php if(isset($message_error)): ?>
                        <p class="alert alert-danger bg-light text-danger p-1 d-inline-block"><?php echo $message_error; ?></p>
                    <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control-submit-button">SUBMIT MESSAGE</button>
                    </div>
                    <?php if(isset($msg)): ?>
                        <p class="alert alert-success bg-light text-success text-center p-1"><?php echo $msg; ?></p>
                    <?php endif; ?>
                </form>
                <!-- end of contact form -->
            </div> <!-- end of col -->