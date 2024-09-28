<?php include "sidebar.php" ?>
<?php include "header.php" ?>


<main class="main">
    <section class="dashboard-section">
        <div class="container-fluid">
            <div class="row align-items-center">

                <?php include "main-search-area.php" ?>

            </div>

            <div class="row">
                <div class="col-12">
                    <div class="upcoming-course-area archive-list-area">

                        <div class="row">

                            <div class="col-12">
                                <h2 class="upcom-coure-title m-0 fw-medium text-black text-capitalize">Market Analysis</h2>
                            </div>

                            <div class="col-12">
                                <div class="main-tab-main">
                                    <div class="row">
                                        <div class="col-12 col-md-9 col-lg-7">
                                            <ul class="analysis-main-tabs-list">
                                                <li class="">
                                                    <button data-view="Overview" class="analysis-main-tab-btn active" type="button">Overview</button>
                                                </li>
                                                <li class="">
                                                    <button data-view="Market" class="analysis-main-tab-btn" type="button">Market</button>
                                                </li>
                                                <li class="">
                                                    <button data-view="Wallets" class="analysis-main-tab-btn" type="button">Wallets</button>
                                                </li>
                                                <li class="">
                                                    <button data-view="Ratings" class="analysis-main-tab-btn" type="button">Ratings</button>
                                                </li>
                                                <li class="">
                                                    <button data-view="Analysis" class="analysis-main-tab-btn" type="button">Analysis</button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-12 col-md-3 col-lg-5">
                                            <ul class="analysis-circle-btns-list d-flex justify-content-end align-items-center gap-3">
                                                <li class="">
                                                    <button class="analysis-circle-btn" type="button">
                                                        <i class="fa-solid fa-up-down-left-right"></i>
                                                    </button>
                                                </li>
                                                <li class="">
                                                    <button class="analysis-circle-btn" type="button">
                                                        <i class="fa-solid fa-angle-up"></i>
                                                    </button>
                                                </li>
                                                <li class="">
                                                    <button class="analysis-circle-btn" type="button">
                                                        <i class="fa-solid fa-xmark"></i>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div data-content="Overview" class="main-tab-content-area active">
                                    <div class="row">
                                        <div class="col-12">
                                            <ul class="analysis-inner-tabs-list analysis-main-tabs-list mb-5">
                                                <li class="">
                                                    <button class="analysis-main-tab-btn active" type="button">Price</button>
                                                </li>
                                                <li class="">
                                                    <button class="analysis-main-tab-btn" type="button">Market cap</button>
                                                </li>
                                                <li class="">
                                                    <button class="analysis-main-tab-btn" type="button">Trading</button>
                                                </li>
                                                <li class="">
                                                    <button class="analysis-main-tab-btn" type="button">USD</button>
                                                </li>
                                                <li class="">
                                                    <button class="analysis-main-tab-btn" type="button">BTC</button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-12">
                                            <div class="market-analysis-chart-area position-relative">
                                                <div id="chartContainer-analysis" style="height: 370px; width: 100%;"></div>
                                                <!-- <span id="timeToRender"></span> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="market-analysis-tite-area mb-5">
                                    <h2 class="upcom-coure-title m-0 fw-medium text-black text-capitalize">daily analysis</h2>
                                    <a class="text-decoration-none view-more" href="#">View More</a>
                                </div>
                            </div>


                        </div>



                        <div class="mb-5">
                            <div class="row">

                                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                                    <div class="analysis-archive position-relative overflow-hidden">
                                        <video poster="./assets/images/event-img-1.png" class="analysis-archive-video position-relative" src="./assets/videos/dummy-video.mp4"></video>

                                        <button class="analysis-archive-play-btn analysis-playPauseBtn" type="button">
                                            <i class="fa-solid fa-play playPauseIcon"></i>
                                            <span class="play-btn-text">play video</span>
                                        </button>

                                        <a class="add-resources daily-analysis text-light-orange" href="#">
                                            Add to resources
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                                    <div class="analysis-archive position-relative overflow-hidden">
                                        <video poster="./assets/images/event-img-1.png" class="analysis-archive-video position-relative" src="./assets/videos/dummy-video.mp4"></video>

                                        <button class="analysis-archive-play-btn analysis-playPauseBtn" type="button">
                                            <i class="fa-solid fa-play playPauseIcon"></i>
                                            <span class="play-btn-text">play video</span>
                                        </button>

                                        <a class="add-resources daily-analysis text-light-orange" href="#">
                                            Add to resources
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                                    <div class="analysis-archive position-relative overflow-hidden">
                                        <video poster="./assets/images/event-img-1.png" class="analysis-archive-video position-relative" src="./assets/videos/dummy-video.mp4"></video>

                                        <button class="analysis-archive-play-btn analysis-playPauseBtn" type="button">
                                            <i class="fa-solid fa-play playPauseIcon"></i>
                                            <span class="play-btn-text">play video</span>
                                        </button>

                                        <a class="add-resources daily-analysis text-light-orange" href="#">
                                            Add to resources
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                                    <div class="analysis-archive position-relative overflow-hidden">
                                        <video poster="./assets/images/event-img-1.png" class="analysis-archive-video position-relative" src="./assets/videos/dummy-video.mp4"></video>

                                        <button class="analysis-archive-play-btn analysis-playPauseBtn" type="button">
                                            <i class="fa-solid fa-play playPauseIcon"></i>
                                            <span class="play-btn-text">play video</span>
                                        </button>

                                        <a class="add-resources daily-analysis text-light-orange" href="#">
                                            Add to resources
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-12">
                            <div class="market-analysis-tite-area mb-5">
                                <h2 class="upcom-coure-title m-0 fw-medium text-black text-capitalize">Market Edge Reports</h2>
                                <a class="text-decoration-none view-more" href="#">View More</a>
                            </div>
                        </div>

                        <div class="">

                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                                    <div class="course-card m-0">
                                        <div class="course-img-area position-relative">
                                            <img class="img-fluid archives-img w-100" src="./assets/images/archives-img-1.png" alt="">

                                            <button class="archive-down-btn" type="button">
                                                <i class="fa-solid fa-download"></i>
                                            </button>

                                        </div>
                                        <div class="course-discrip-area">
                                            <h3 class="course-title fw-semibold mb-0">Lorem Ipsum is simply <br> dummy text</h3>

                                            <div class="mar-edge-rep-btns d-flex justify-content-between mb-3 mt-5 align-items-center">
                                                <a class="course-enroll-link d-inline-flex text-decoration-none" href="#">
                                                    View Details
                                                    <i class="fa-solid fa-arrow-right"></i>
                                                </a>
                                                <a class="add-resources" href="#">
                                                    Add to resources
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                                    <div class="course-card m-0">
                                        <div class="course-img-area position-relative">
                                            <img class="img-fluid archives-img w-100" src="./assets/images/archives-img-2.png" alt="">

                                            <button class="archive-down-btn" type="button">
                                                <i class="fa-solid fa-download"></i>
                                            </button>

                                        </div>
                                        <div class="course-discrip-area">
                                            <h3 class="course-title fw-semibold mb-0">Lorem Ipsum is simply <br> dummy text</h3>

                                            <div class="mar-edge-rep-btns d-flex justify-content-between mb-3 mt-5 align-items-center">
                                                <a class="course-enroll-link d-inline-flex text-decoration-none" href="#">
                                                    View Details
                                                    <i class="fa-solid fa-arrow-right"></i>
                                                </a>
                                                <a class="add-resources" href="#">
                                                    Add to resources
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                                    <div class="course-card m-0">
                                        <div class="course-img-area position-relative">
                                            <img class="img-fluid archives-img w-100" src="./assets/images/archives-img-3.png" alt="">

                                            <button class="archive-down-btn" type="button">
                                                <i class="fa-solid fa-download"></i>
                                            </button>

                                        </div>
                                        <div class="course-discrip-area">
                                            <h3 class="course-title fw-semibold mb-0">Lorem Ipsum is simply <br> dummy text</h3>

                                            <div class="mar-edge-rep-btns d-flex justify-content-between mb-3 mt-5 align-items-center">
                                                <a class="course-enroll-link d-inline-flex text-decoration-none" href="#">
                                                    View Details
                                                    <i class="fa-solid fa-arrow-right"></i>
                                                </a>
                                                <a class="add-resources" href="#">
                                                    Add to resources
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                                    <div class="course-card m-0">
                                        <div class="course-img-area position-relative">
                                            <img class="img-fluid archives-img w-100" src="./assets/images/archives-img-3.png" alt="">

                                            <button class="archive-down-btn" type="button">
                                                <i class="fa-solid fa-download"></i>
                                            </button>

                                        </div>
                                        <div class="course-discrip-area">
                                            <h3 class="course-title fw-semibold mb-0">Lorem Ipsum is simply <br> dummy text</h3>

                                            <div class="mar-edge-rep-btns d-flex justify-content-between mb-3 mt-5 align-items-center">
                                                <a class="course-enroll-link d-inline-flex text-decoration-none" href="#">
                                                    View Details
                                                    <i class="fa-solid fa-arrow-right"></i>
                                                </a>
                                                <a class="add-resources" href="#">
                                                    Add to resources
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
</main>


<?php include "footer.php" ?>

<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
<script src="./assets/js/market-analysis.js"></script>

