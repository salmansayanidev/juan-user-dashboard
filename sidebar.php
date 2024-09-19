<?php
include "head.php"
?>

<body>

    <div class="dashboard-main">

        <div class="side-bar">

            <div class="mb-5">
                <a href="#" class=" sidebar-logo-area text-decoration-none ">
                    <img class="img-fluid sidebar-logo" src="./assets/images/login-logo.png" alt="">
                </a>
            </div>

            <div class=" flex-grow-1 mb-3 overflow-y-auto">
                <nav class="sidebar-navigation">
                    <ul class="navigation-list">

                        <li class="navigation-li">
                            <a class="link text-decoration-none" href=".">
                                <i class="bi bi-grid-fill"></i>
                                Dashboard
                            </a>
                        </li>

                        <li class="navigation-li">
                            <a class="link text-decoration-none" href="trading-alerts.php">
                                <i class="bi bi-grid-fill"></i>
                                Trading Alerts
                            </a>
                        </li>

                        <li class="navigation-li">
                            <a class="link text-decoration-none" href="chat-room.php">
                                <i class="bi bi-grid-fill"></i>
                                Chat Rooms
                            </a>
                        </li>

                        <li class="navigation-li">
                            <a class="link text-decoration-none" href="#">
                                <i class="bi bi-grid-fill"></i>
                                Events
                            </a>
                        </li>

                        <li class="navigation-li">
                            <a class="link text-decoration-none" href="#">
                                <i class="bi bi-grid-fill"></i>
                                Market Analysis
                            </a>
                        </li>

                        <li class="navigation-li">
                            <a class="link text-decoration-none" href="#">
                                <i class="bi bi-grid-fill"></i>
                                Accounts
                            </a>
                        </li>

                        <li class="navigation-li">
                            <a class="link text-decoration-none" href="#">
                                <i class="bi bi-grid-fill"></i>
                                Statistics
                            </a>
                        </li>

                        <li class="">
                            <a class="link text-decoration-none" href="#">
                                <i class="bi bi-grid-fill"></i>
                                Wallet
                            </a>
                        </li>

                    </ul>
                </nav>
            </div>

            <div class="sidebar-logout-btn-area">
                <button class="sidebar-logout-btn" type="button">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    logout
                </button>
            </div>

        </div>



        <script>
            var currentPage = window.location.href;

            var navLinks = document.querySelectorAll(".link");
            for (var i = 0; i < navLinks.length; i++) {
                if (navLinks[i].href === currentPage) {
                    navLinks[i].classList.add("active");
                }
            }
        </script>