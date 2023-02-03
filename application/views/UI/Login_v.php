<main class="main">
    
    <section class="pt-50 pb-50" id="login">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="row">
                        <div class="col-lg-5 m-auto">
                            <div
                                class="login_wrap widget-taber-content p-20 background-white border-radius-10 mb-md-5 mb-lg-0 mb-sm-5">
                                <div class="padding_eight_all bg-white">
                                    <div class="heading_s1">
                                        <h3 class="mb-30">Login</h3>
                                    </div>
                                    <form method="post" id="customer-login" action="<?php echo base_url('customer-login');?>">
                                        <div class="form-group">
                                            <input type="text" required="" name="txt_cust_email_phone" placeholder="Your Email">
                                        </div>
                                        <div class="form-group">
                                            <input required="" type="password" name="txt_cust_password" placeholder="Password">
                                        </div>                                        
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-fill-out btn-block hover-up"
                                                name="login">Log in</button>
                                        </div>
                                        <div class="login_footer form-group">                                            
                                            <a class="text-muted forgot-password" href="javascript:void(0)">Forgot password?</a>
                                            <div class="text-muted">New Customer? <a href="<?php echo base_url('register')?>">Sign up now</a></div>
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FORGOT PASSWORD -->
    <section class="pt-50 pb-50 d-none" id="forgotpassword">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="row">
                        <div class="col-lg-5 m-auto">
                            <div
                                class="login_wrap widget-taber-content p-20 background-white border-radius-10 mb-md-5 mb-lg-0 mb-sm-5">
                                <div class="padding_eight_all bg-white">
                                    <div class="heading_s1">
                                        <h3 class="mb-30">Login</h3>
                                    </div>
                                    <form method="post" id="forgot-password-form" action="<?php echo base_url('forgot-password');?>">
                                        <div class="form-group">
                                            <input type="text" required="" name="txt_cust_email_phone" placeholder="Your Email">
                                        </div>                                                                              
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-fill-out btn-block hover-up"
                                                name="login">Log in</button>
                                        </div>
                                        <div class="login_footer form-group">                                            
                                            <a class="text-muted" href="#">Forgot password?</a>
                                            <div class="text-muted">New Customer? <a href="<?php echo base_url('register')?>">Sign up now</a></div>
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>