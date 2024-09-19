<?php
include "head.php"
?>

<body>

    <main>
        <section class="login-section">
            <div class="login-section-flex">
                <div class="login-section-left">
                    <div class="">
                        <h1 class="login-title mb-4">welcome to</h1>
                        <img class="img-fluid" src="./assets/images/login-logo.png" alt="">
                    </div>
                </div>
                <div class="login-section-right">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="login-sb-title">Login</h2>
                                <p class="login-para">Login to your User dashboard</p>
                            </div>
                            <div class="col-12 col-lg-7">
                                <form action="">
                                    <div class="login-fields-main">

                                        <div class="login-fields-area mb-5 d-flex justify-content-start align-items-center flex-wrap">
                                            <div class="field-icon-area">
                                                <i class="fa-regular fa-envelope"></i>
                                            </div>
                                            <div class="form-floating flex-grow-1">
                                                <input type="email" class="form-control login-fields" id="email" placeholder="">
                                                <label class="login-label" for="">Email</label>
                                            </div>
                                        </div>

                                        <div class="login-fields-area d-flex justify-content-start align-items-center flex-wrap">
                                            <div class="field-icon-area">
                                                <i class="fa-solid fa-lock"></i>
                                            </div>
                                            <div class="form-floating flex-grow-1">
                                                <input type="password" class="form-control login-fields" id="password" placeholder="">
                                                <label class="login-label" for="">PASSWORD</label>
                                            </div>
                                        </div>

                                        <button class="login-btn text-uppercase mt-5 d-flex justify-content-start align-items-center gap-3" type="submit">
                                            LOGIN
                                            <i class="fa-solid fa-arrow-right-to-bracket"></i>
                                        </button>

                                    </div>
                                </form>

                                <div class="login-link-area d-flex justify-content-between mt-5  align-items-center">
                                    <a class="login-link text-decoration-none" href="forgot-password.php">
                                        Forget Password ?
                                    </a>
                                    <p class="login-link m-0">New User <a class="login-link" href="signup.php"> Signup </a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>