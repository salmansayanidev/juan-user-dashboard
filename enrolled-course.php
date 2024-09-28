<?php
include "sidebar.php"
?>

<?php
include "header.php"
?>



<main class="main">
    <section class="dashboard-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="enrolled-course-area mb-5">
                        <div class="row">
                            <div class="col-12">
                                <video controls class="enrolled-video" src="./assets/videos/tip-video.mp4"></video>

                                <div class="">
                                    <div class=" enrolled-img-title-area d-flex justify-content-between align-items-center gap-5">
                                        <div class="d-flex justify-content-start flex-grow-1 align-items-lg-center align-items-md-center align-items-sm-center align-items-start  gap-lg-5 gap-md-5 gap-4">
                                            <img class="img-fluid erolled-profile" src="./assets/images/enrolled-profile-img.png" alt="">
                                            <h2 class="enrolled-course-title m-0 text-black fw-semibold">Lorem Ipsum is simply dummy text of the printing and <br> typesetting industry</h2>
                                        </div>
                                        <div class="">
                                            <span class="enrolled-video-time fw-bold text-light-orange">50m:30s</span>
                                        </div>
                                    </div>
                                    <p class="course-disc-para fw-normal mt-4 mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                                    <button class="course-enroll-link px-5 mb-4" type="button">Next Tutorial</button>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="enrolled-course-area mb-5">
                        <div class="row">
                            <div class="col-12">
                                <div class=" inst-dura-detail-main d-flex justify-content-between align-items-center">
                                    <div class="inst-dura-detail d-flex justify-content-start align-items-center">

                                        <div class="position-relative">
                                            <span class="course-disc-para d-block mb-2 fw-normal">Instructor</span>
                                            <div class="d-flex justify-content-start align-items-center gap-4">
                                                <img class="img-fluid instructor-img" src="./assets/images/user-porfile-img.png" alt="">
                                                <h2 class="instructor-name list-disc-para fw-medium">Jonathan Andrews</h2>
                                            </div>
                                        </div>

                                        <div class="position-relative">
                                            <span class="course-disc-para d-block mb-2 fw-normal">Course duration</span>
                                            <div class="d-flex justify-content-start align-items-center gap-4">
                                                <i class="fa-regular fa-clock text-light-orange fs-3"></i>
                                                <h2 class="instructor-name list-disc-para fw-medium">32h 50m</h2>
                                            </div>
                                        </div>

                                        <div class="position-relative">
                                            <span class="course-disc-para d-block mb-2 fw-normal">Ratings</span>
                                            <div class="d-flex justify-content-start align-items-center gap-4">
                                                <h2 class="instructor-name list-disc-para fw-medium">20 Ratings</h2>
                                                <div class=" d-flex justify-content-start align-items-center gap-2">
                                                    <span class="fa fa-star enrolled-star"></span>
                                                    <span class="fa fa-star enrolled-star"></span>
                                                    <span class="fa fa-star enrolled-star"></span>
                                                    <span class="fa fa-star enrolled-star"></span>
                                                    <span class="fa fa-star enrolled-star"></span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="">
                                        <button class="course-enroll-link px-5" type="button">Leave a Review</button>
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





<?php
include "footer.php"
?>