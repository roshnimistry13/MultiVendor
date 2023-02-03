<main class="main">
   
    <section class="pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="row">
                        <div class="col-lg-6 m-auto">
                            <div class="login_wrap widget-taber-content p-30 background-white border-radius-5">
                                <div class="padding_eight_all bg-white">
                                    <div class="heading_s1">
                                        <h3 class="mb-30">Create an Account</h3>
                                    </div>                                    
                                    <form method="post" id="RegisterForm" action="<?php echo base_url('register-customer')?>">
                                        <div class="form-group">
                                            <input type="text" required="" name="name" placeholder="name">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" required="" name="email" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" required="" name="contact_no" placeholder="Phone">
                                        </div>
                                        <div class="form-group">
                                            <input required="" type="password" name="password" id="password" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <input required="" type="password" name="confrim_password"
                                                placeholder="Confirm password">
                                        </div>                                        
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-fill-out btn-block hover-up"
                                                name="login">Submit &amp; Register</button>
                                        </div>
										<div class="text-muted">Already have an account? <a href="<?php echo base_url('login')?>">Sign in now</a></div>
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