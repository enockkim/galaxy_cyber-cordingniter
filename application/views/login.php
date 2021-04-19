<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Page Title - SB Admin</title>
        <?php echo link_tag('components/assets/css/styles.css')?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                    <div class="wrap-forms">
                                    <div id="message"></div>
                                    <?php if($this->session->keep_flashdata('message')){ ?>
                                         <div class="alert alert-info alert-dismissible" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span></button>
                                                <?php echo $this->session->keep_flashdata('message'); ?>
                                            </div>
                                    <?php } ?>
                                     <?php $attributes = array("name" => "loginform", 'id'=>'loginform');
                                     echo form_open("login/validate", $attributes);?>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group has-placeholder">
                                                    <label for="login-email">Email address</label>
                                                    <i class="grey fa fa-envelope-o"></i>
                                                    <input type="text" class="form-control" id="email" autofocus placeholder="Email Address" name="email">
                                                    <!-- <span style="color: red; font-size: small;">Require email</span> -->
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group has-placeholder">
                                                    <label for="login-password">Password</label>
                                                    <i class="grey fa fa-pencil-square-o"></i>
                                                    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="remember_me_checkbox">
                                                    <label for="remember_me_checkbox">Remember Me
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="theme_button block_button color1">Log In</button>
                                    </form>
                                </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url(); ?>components/assets/js/scripts.js"></script>
        <script src="<?php echo base_url(); ?>components/customs/login.js"></script>
        <script src="<?php echo base_url(); ?>components/assets/js/compressed.js"></script>
  <script src="<?php echo base_url(); ?>components/assets/js/main.js"></script>
    </body>
</html>
