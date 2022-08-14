<div class="content-wrapper">
    <div class="breadcrumb-wrap bg-f br-1">
        <div class="overlay bg-black op-9"></div>
        <img src="<?= Yii::getAlias('@web').'/hibootstrap/img/shape-1.png' ?>" alt="Image" class="br-shape-1" />
        <img src="<?= Yii::getAlias('@web').'/hibootstrap/img/shape-2.png' ?>" alt="Image" class="br-shape-2" />
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-title">
                        <h2>Login</h2>
                        <ul class="breadcrumb-menu list-style">
                            <li><a href="index.html">Home </a></li>
                            <li>Login</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="login-wrap pt-100 pb-100">
        <img src="<?= Yii::getAlias('@web').'/hibootstrap/img/shape-1.png' ?>" alt="Image" class="login-shape-1" />
        <img src="<?= Yii::getAlias('@web').'/hibootstrap/img/shape-2.png' ?>" alt="Image" class="login-shape-2" />
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-8 offset-md-2">
                    <div class="login-form">
                        <div class="login-header bg-green">
                            <h2 class="text-center mb-0">Login</h2>
                        </div>
                        <div class="login-body">
                            <form class="form-wrap" action="#">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="email">Username/Email/Phone</label>
                                            <input id="email" name="email" type="email" placeholder="Email Address*" required="" />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="pwd">Password</label>
                                            <input id="pwd" name="pwd" type="password" placeholder="Password" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form_group mb-20">
                                            <input type="checkbox" id="test_1" />
                                            <label for="test_1">Remember Me</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12 text-md-end mb-20">
                                        <a href="forgot-pwd.html" class="link style2">Forgot Password?</a>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <button class="btn style1 w-100 d-block">Log In</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="or-text">
                                            <p>Or Login With</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <ul class="social-profile style3 text-center mt-0 list-style">
                                                <li>
                                                    <a target="_blank" href="https://instagram.com/"><i class="lab la-instagram"></i></a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="https://twitter.com/"><i class="lab la-twitter"></i></a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="https://facebook.com/"><i class="lab la-facebook-f"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <p class="mb-0">Don’t Have an Account? <a class="link style2" href="register.html">Create One</a></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
