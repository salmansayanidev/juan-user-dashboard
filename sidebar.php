<?php
include "head.php"
?>

<body>

    <div class="dashboard-main">

        <div class="side-bar">

            <button class="sidebar-cls-btn" type="button">
                <i class="fa-solid fa-xmark"></i>
            </button>

            <div class="mb-5">
                <a href="#" class=" sidebar-logo-area text-decoration-none ">
                    <img class="img-fluid sidebar-logo" src="./assets/images/login-logo.png" alt="">
                </a>
            </div>

            <div class="navigation-area flex-grow-1 mb-3 overflow-y-auto">
                <nav class="sidebar-navigation">
                    <ul class="navigation-list">

                        <li class="navigation-li">
                            <a class="link text-decoration-none" href=".">
                                <img class="img-fluid sidebar-icon" src="./assets/images/sidebar-icon-1.png" alt="">
                                Dashboard
                            </a>
                        </li>

                        <li class="navigation-li">
                            <a class="link text-decoration-none" href="trading-alerts.php">
                                <img class="img-fluid sidebar-icon" src="./assets/images/sidebar-icon-2.png" alt="">
                                Trading Alerts
                            </a>
                        </li>

                        <li class="navigation-li">
                            <a class="link text-decoration-none" href="chat-room.php">
                                <img class="img-fluid sidebar-icon" src="./assets/images/sidebar-icon-3.png" alt="">
                                Chat Rooms
                            </a>
                        </li>

                        <li class="navigation-li">
                            <a class="link text-decoration-none" href="events.php">
                                <img class="img-fluid sidebar-icon" src="./assets/images/sidebar-icon-4.png" alt="">
                                Events
                            </a>
                        </li>

                        <li class="navigation-li">
                            <a class="link text-decoration-none" href="courses.php">
                                <img class="img-fluid sidebar-icon" src="./assets/images/sidebar-icon-5.png" alt="">
                                Courses
                            </a>
                        </li>

                        <li class="navigation-li">
                            <a class="link text-decoration-none" href="notifications.php">
                                <img class="img-fluid sidebar-icon" src="./assets/images/sidebar-icon-6.png" alt="">
                                Notifications
                            </a>
                        </li>

                        <li class="navigation-li">
                            <a class="link text-decoration-none" href="market-analysis.php">
                                <img class="img-fluid sidebar-icon" src="./assets/images/sidebar-icon-7.png" alt="">
                                Market Analysis
                            </a>
                        </li>
                        
                        <li class="navigation-li">
                            <a class="link text-decoration-none" href="resources.php">
                                <img class="img-fluid sidebar-icon" src="./assets/images/sidebar-icon-8.png" alt="">
                                Resources
                            </a>
                        </li>

                        <li class="navigation-li position-relative">
                            <a class="link text-decoration-none " href="account.php">
                                <img class="img-fluid sidebar-icon" src="./assets/images/sidebar-icon-9.png" alt="">
                                Accounts
                            </a>
                            
                            <div class="">
                                <button class="sidebar-drop-btn bg-transparent border-0" type="button"><i class="fa-solid fa-angle-down "></i></button>
                            </div>
                            <ul class="sidebar-dropdown-link"> 
                                <li class="navigation-li">
                                    <a class="link drop-link text-decoration-none" href="subscriptions.php">
                                        <img class="img-fluid sidebar-icon" src="./assets/images/sidebar-icon-10.png" alt="">
                                        Subscription
                                    </a>
                                </li>
                                <li class="navigation-li">
                                    <a class="link drop-link text-decoration-none" href="wallet.php">
                                        <img class="img-fluid sidebar-icon" src="./assets/images/sidebar-icon-11.png" alt="">
                                        Wallet
                                    </a>
                                </li>
                            </ul>
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



        


