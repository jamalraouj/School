<?php include_once APPROOT . '/views/inc/head.php'; ?>
<body class="bg-gradient-primary">
    <div class="container vh-100">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-12 col-xl-10">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-flex">
                                <div class="flex-grow-1 bg-login-image"
[13:34]
style="background-image: url('<?php echo URLROOT; ?>/public/images/std.png');" width="5px" height="9px"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h4 class="text-primary mb-4 fs-1 text-bold ">Gestion d'ecol</h4>
                                    </div>
                                    <?php if(!$data){ ?> <p class="alert alert-danger text-center">username or password incorrect</p>  <?php }; ?>
                                    <form id="inscription" method="POST" action="<?php echo URLROOT ?>/adminController/Login">
                                        <label class="text-black fs-6 p-2">Username</label>
                                        <div class="mb-3"><input class="form-control form-control-user" type="username" id="email" aria-describedby="emailHelp" placeholder="Enter Username" name="username"></div>
                                        <div  class="alert d-none"></div>

                                        <label class="text-black fs-6 p-
[13:34]
2">Password</label>
                                        <div class="mb-3"><input class="form-control form-control-user" type="password" id="password" placeholder="Password" name="password"></div>
                                        <div  class="alert d-none"></div>
                                        <div class="mb-3">

                                            <div class="custom-control custom-checkbox small">


                                            </div>
                                        </div>
                                        <button  type="submit" name="submitLogin" id="botona"class="btn btn-primary d-block btn-user w-100">Login</button>

                                    </form>
                                    <div class="form-check p-2"><input class="form-check-input custom-control-input" type="checkbox" id="formCheck-1"><label>Remember Me</label></div>

                                    <div class="text-center "><a class="small">Forgot Password?</a></div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once APPROOT . '/views/inc/linkJS.php'; ?>
