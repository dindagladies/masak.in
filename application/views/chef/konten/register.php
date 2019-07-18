<div class="container-scroller ">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
            <div class="row flex-grow justify-content-center">
                <div class="col-md-8 d-flex align-items-center ">
                    <div class="auth-form-transparent text-left p-3">
                        <h4>New here?</h4>
                        <form class="pt-3" method="POST" action="<?php echo base_url('auth/reg_action') ?>">
                            <div class="form-group">
                                <label>Nama Lengkap </label>
                                <div class="input-group">
                                    <div class="input-group-prepend bg-transparent">
                                        <span class="input-group-text bg-transparent border-right-0">
                                            <i class="mdi mdi-account-outline text-primary"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control " id="nama" name="nama_lengkap" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <div class="input-group">
                                    <div class="input-group-prepend bg-transparent">
                                        <span class="input-group-text bg-transparent border-right-0">
                                            <i class="mdi mdi-email-outline text-primary"></i>
                                        </span>
                                    </div>
                                    <input type="email" class="form-control " placeholder="Email" name="email" id="email">
                                </div>  
                                <span id="email-stat">

                                </span>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <div class="input-group">
                                    <div class="input-group-prepend bg-transparent">
                                        <span class="input-group-text bg-transparent border-right-0">
                                            <i class="mdi mdi-lock-outline text-primary"></i>
                                        </span>
                                    </div>
                                    <input type="password" class="form-control " id="password" placeholder="Password" name="password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Konfirmasi Password</label>
                                <div class="input-group">
                                    <div class="input-group-prepend bg-transparent">
                                        <span class="input-group-text bg-transparent border-right-0">
                                            <i class="mdi mdi-lock-outline text-primary"></i>
                                        </span>
                                    </div>
                                    <input type="password" class="form-control" id="passwordTwo" placeholder="Kkonfirmasi Password" name="konfirmasi_pw">
                                </div>
                                <span id="pw-stat">

                                </span>
                            </div>
                            <div class="mb-4">
                                <div class="form-check">
                                    <label class="form-check-label text-muted">
                                        <input type="checkbox" class="form-check-input">
                                        I agree to all Terms &amp; Conditions
                                        <i class="input-helper"></i></label>
                                </div>
                            </div>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" id="cek">SIGN UP</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 register-half-bg d-flex flex-row">
                    <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright © 2018 All rights reserved.</p>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<script src="<?php echo base_url('assets/admin/js/jquery-3.4.1.min.js') ?>"></script>
<script>
    $(document).ready(function() {

        $('#email').change(function() {
            var email = $('#email').val();

            if (email != '') {
                $.ajax({
                    url: '<?php echo base_url('auth/cekEmail') ?>',
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