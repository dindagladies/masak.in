<!-- Sign up form -->
<section>
    <div class="container">
        <div class="signup-content">
            <div class="signup-form">
                <h2 class="form-title">Sign up</h2>
                <form method="POST" class="register-form" id="register-form" action="<?php echo base_url('user/auth/reg_action') ?>">
                    <div class="form-group">
                        <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="nama_lengkap" id="name" placeholder="Nama Lengkap" required/>
                    </div>
                    <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-email"></i></label>
                        <input type="email" name="email" id="email" placeholder="Your Email"/>
                    </div>
                    <span id="email-stat">
                    </span>
                    <div class="form-group">
                        <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="password" id="password" placeholder="Password"/>
                    </div>
                    <div class="form-group">
                        <label for="passT"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="konfirmasi_pw" id="passwordTwo" placeholder="Konfirmasi Password"/>
                    </div>
                    <span id="pw-stat"></span>

                    <div class="form-group">
                        <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                        <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" name="signup" id="cek" class="form-submit" value="Register"/>
                    </div>
                </form>
            </div>
            <!-- <div id="responseDiv" class="alert text-center" style="margin-top:20px; display:none;">
                <button type="button" class="close" id="clearMsg"><span aria-hidden="true">&times;</span></button>
                <span id="message"></span>
            </div> -->
            <div class="signup-image">
                <figure><img src="<?= base_url('assets/login/');?>images/logo-2.png" alt="sing up image"></figure>
                <a href="<?= base_url('user/auth');?>" class="signup-image-link">I am already member</a>
            </div>
        </div>
    </div>
</section>

<script src="<?= base_url('assets/login/vendor/jquery/jquery.min.js');?>"></script>
<script>
    $(document).ready(function() {

        $('#email').change(function() {
            var email = $('#email').val();

            if (email != '') {
                $.ajax({
                    url: '<?php echo base_url('user/auth/cekEmail') ?>',
                    method: 'POST',
                    data: {
                        email: email
                    },
                    success: function(data) {
                        $('#email-stat').html(data);
                    }
                })
            }

        });

        $('#passwordTwo').change(function(){
            var password = $('#password').val();
            var passwordTwo = $('#passwordTwo').val();
           
            if( password == passwordTwo ){
                var data = '<label class="error mt-2 text-success">Password matched </label>'
            }else{
                var data = '<label class="error mt-2 text-danger" >Password harus sama </label>'
                $('#cek').attr('disabled','disabled');
            }
            $('#pw-stat').html(data);
            
        })

    });
</script>