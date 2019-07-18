<!-- Sing in  Form -->
<section class="sign-in">
    <div class="container">
        <div class="signin-content">
            <div class="signin-image">
                <figure><img src="<?= base_url('assets/login/');?>images/logo-2.png" alt="sing in image"></figure>
                <a href="<?= base_url('user/auth/register');?>" class="signup-image-link">Create an account</a>
            </div>

            <div class="signin-form">
                <?php if ($this->session->flashdata('error')) { ?>
                    <div class="alert alert-fill-danger" role="alert">
                        <i class="mdi mdi-alert-circle"></i>
                        <?php echo $this->session->flashdata('error') ?>
                    </div>
                <?php } ?>
                <h2 class="form-title">Sign In</h2>
                <form method="POST" class="register-form" id="login-form" action="<?php echo base_url('user/auth/log_action'); ?>">
                    <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="email" name="email" id="email" placeholder="Email"/>
                    </div>
                    <div class="form-group">
                        <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="password" id="password" placeholder="Password"/>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                        <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                    </div>
                </form>
                <div class="social-login">
                    <span class="social-label">Or login with</span>
                    <ul class="socials">
                        <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                        <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                        <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                    </ul>
                </div>
                <div id="responseDiv" class="alert text-center" style="margin-top:20px; display:none;">
                    <button type="button" class="close" id="clearMsg"><span aria-hidden="true">&times;</span></button>
                    <span id="message"></span>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="<?= base_url('assets/login/vendor/jquery/jquery.min.js');?>"></script>

