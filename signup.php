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
                                <div class="login-right-logo-area text-center mb-4">
                                    <img class="img-fluid login-right-logo mb-4" src="./assets/images/login-right-logo.png" alt="">
                                    <h1 class="login-title text-black m-0">welcome to</h1>
                                </div>
                            </div>
                            <div class="col-12">
                                <h2 class="login-sb-title text-center text-lg-start text-md-center">SIGNUP</h2>
                                <p class="login-para text-center text-lg-start text-md-center">Signup as a new user</p>
                            </div>
                            <div class="col-12 col-lg-12 col-xl-9 col-xx-10">
                                <form action="">
                                    <div class="login-fields-main">

                                        <div class="login-fields-area mb-5 d-flex justify-content-start align-items-center flex-wrap">
                                            <div class="field-icon-area">
                                                <i class="fa-regular fa-envelope"></i>
                                            </div>
                                            <div class="form-floating flex-grow-1 ">
                                                <select class="form-select login-fields" id="signup-for" aria-label="Floating label select example">
                                                    <option value="1">For Trading Alerts</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                                <label class="login-label" for="signup-for">Signup For</label>
                                            </div>
                                        </div>

                                        <div class="login-fields-area mb-5 d-flex justify-content-start align-items-center flex-wrap">
                                            <div class="field-icon-area">
                                                <i class="fa-regular fa-envelope"></i>
                                            </div>
                                            <div class="form-floating flex-grow-1">
                                                <input type="email" class="form-control login-fields" id="email" placeholder="">
                                                <label class="login-label" for="">Email</label>
                                            </div>
                                        </div>

                                        <div class="login-fields-area mb-5 d-flex justify-content-start align-items-center flex-wrap">
                                            <div class="field-icon-area">
                                                <i class="fa-solid fa-lock"></i>
                                            </div>
                                            <div class="form-floating flex-grow-1">
                                                <input type="password" class="form-control login-fields" id="password" placeholder="">
                                                <label class="login-label" for="">PASSWORD</label>
                                            </div>
                                        </div>

                                        <div class="login-fields-area mb-3 d-flex justify-content-start align-items-center flex-wrap">
                                            <div class="field-icon-area">
                                                <i class="fa-solid fa-lock"></i>
                                            </div>
                                            <div class="form-floating flex-grow-1">
                                                <input type="password" class="form-control login-fields" id="conf-password" placeholder="">
                                                <label class="login-label" for="conf-password">CONFIRM PASSWORD</label>
                                            </div>
                                        </div>

                                        <button class="login-btn text-uppercase mt-5 d-flex justify-content-start align-items-center gap-3" type="submit">
                                            SIGNUP
                                            <i class="fa-solid fa-arrow-right-to-bracket"></i>
                                        </button>
                                    </div>
                                </form>
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