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
                                <h2 class="login-sb-title text-center text-lg-start text-md-center">password updated</h2>
                            </div>
                            <div class="col-12 col-lg-12 col-xl-9 col-xx-10">
                                <form action="password-updated.php">
                                    <div class="login-fields-main">

                                        <p class="login-para ">Your new password has been changed successfully. Use you new password to login.</p>


                                        <a href="login.php" class="login-btn text-uppercase mt-5 d-flex justify-content-start align-items-center gap-3 text-decoration-none">
                                            BACK TO LOGIN
                                            <i class="fa-solid fa-arrow-right-to-bracket"></i>
                                        </a>

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