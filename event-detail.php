<?php
include "sidebar.php"
?>

<?php
include "header.php"
?>




<main class="main">
    <section class="dashboard-section">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-12 col-xl-8 col-lg-12">
                    <div class="event-detail-left">
                        <h3 class="event-detail-title fw-bold text-black">Event Details</h3>
                        <div class="event-detail-reviews-area d-flex justify-content-start align-items-center">
                            <div class="d-flex justify-content-start align-items-center gap-4 position-relative">
                                <span class="event-detail-review">5.0</span>
                                <div class=" d-flex justify-content-start align-items-center gap-2">
                                    <span class="fa fa-star enrolled-star"></span>
                                    <span class="fa fa-star enrolled-star"></span>
                                    <span class="fa fa-star enrolled-star"></span>
                                    <span class="fa fa-star enrolled-star"></span>
                                    <span class="fa fa-star enrolled-star"></span>
                                </div>
                            </div>
                            <div class=" position-relative ">
                                <span class="event-detail-review">Review (1k)</span>
                            </div>
                            <div class="position-relative">
                                <span class="event-detail-review">10k Attendant</span>
                            </div>
                        </div>
                        <div class="event-detail-profile-area mt-5 d-flex justify-content-start align-items-center gap-4">
                            <img class="event-detail-profile-img" src="./assets/images/event-profile-img.png" alt="">
                            <h2 class="event-admin-name m-0 fw-medium">David Warner</h2>
                        </div>
                        <ul class="event-detail-tabs d-flex justify-content-start align-items-center gap-5">
                            <li class="">
                                <button class="event-detail-tab-btn" type="button">About</button>
                            </li>
                        </ul>
                        <img class="img-fluid event-detail-img" src="./assets/images/event-detail-img.png" alt="">

                        <h3 class="course-disc-title text-black text-black mb-4">About This Event</h3>
                        <p class="course-disc-para fw-normal mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit dolor modi quos commodi quam facere, quas tempore eius ab neque tempora nihil culpa voluptatem nesciunt a amet deserunt asperiores ea consequuntur sequi consequatur. Alias, quis.</p>

                        <h3 class="course-disc-title text-black text-black mb-4">Event’s Objectives</h3>
                        <p class="course-disc-para fw-normal mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam mollitia autem numquam obcaecati ullam at earum? Mollitia deleniti quia odit eius, ratione omnis, asperiores, ex dolores voluptatum itaque sint numquam.</p>

                        <h3 class="course-disc-title text-black text-black mb-5">Want To join?</h3>

                        <div class="event-app-btns d-flex justify-content-between align-items-center gap-5">
                            <button class="course-enroll-link border-0 w-100 text-uppercase" type="button">Yes</button>
                            <button class="course-enroll-link border-0 w-100 text-uppercase" type="button">maybe</button>
                            <button class="course-enroll-link border-0 w-100 text-uppercase" type="button">no</button>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-xl-4 col-lg-12">
                    <div class="row">
                        <div class="col-12 col-lg-6 col-xl-12 col-md-6">
                            <div class="event-detail-right">
                                <div class="event-trailor-video-area position-relative">
                                    <video class="event-trailor-video" src="./assets/videos/tip-video.mp4" poster="./assets/images/event-detail-img.png"></video>
                                    <button class="event-trailor-video-btn playPauseBtn text-uppercase text-white bg-transparent d-flex justify-content-center align-items-center flex-column" type="button">
                                        <i class="fa-solid fa-play fs-1 playPauseIcon"></i>
                                        play trailor
                                    </button>
                                </div>
                                <h3 class="course-disc-title sm-hd text-black m-0">What will you learn:</h3>

                                <ul class="event-learning-list">
                                    <li class="event-learning-li d-flex justify-content-start  gap-3">
                                        <span class="learning-list-circle">
                                            <i class="fa-solid fa-check"></i>
                                        </span>
                                        <p class="course-disc-para fw-normal m-0">Lorem ipsum dolor sit</p>
                                    </li>
                                    <li class="event-learning-li d-flex justify-content-start  gap-3">
                                        <span class="learning-list-circle">
                                            <i class="fa-solid fa-check"></i>
                                        </span>
                                        <p class="course-disc-para fw-normal m-0">Lorem ipsum dolor sit</p>
                                    </li>
                                    <li class="event-learning-li d-flex justify-content-start  gap-3">
                                        <span class="learning-list-circle">
                                            <i class="fa-solid fa-check"></i>
                                        </span>
                                        <p class="course-disc-para fw-normal m-0">Lorem ipsum dolor sit</p>
                                    </li>
                                    <li class="event-learning-li d-flex justify-content-start  gap-3">
                                        <span class="learning-list-circle">
                                            <i class="fa-solid fa-check"></i>
                                        </span>
                                        <p class="course-disc-para fw-normal m-0">Lorem ipsum dolor sit</p>
                                    </li>
                                    <li class="event-learning-li d-flex justify-content-start  gap-3">
                                        <span class="learning-list-circle">
                                            <i class="fa-solid fa-check"></i>
                                        </span>
                                        <p class="course-disc-para fw-normal m-0">Lorem ipsum dolor sit</p>
                                    </li>
                                    <li class="event-learning-li d-flex justify-content-start  gap-3">
                                        <span class="learning-list-circle">
                                            <i class="fa-solid fa-check"></i>
                                        </span>
                                        <p class="course-disc-para fw-normal m-0">Lorem ipsum dolor sit</p>
                                    </li>
                                </ul>

                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-xl-12 col-md-6">
                            <div class="event-detail-right">
                                <div class="event-datetime-detail d-flex justify-content-start align-items-center gap-3">
                                    <label class="course-disc-title sm-hd text-black m-0 text-capitalize">
                                        Date :
                                    </label>
                                    <p class="course-disc-para fw-normal m-0 text-capitalize"><span>September 7, 2024</span> - <span>September 27, 2024</span></p>
                                </div>
                                <div class="event-datetime-detail d-flex justify-content-start align-items-center gap-3">
                                    <label class="course-disc-title sm-hd text-black m-0 text-capitalize">
                                        Time :
                                    </label>
                                    <p class="course-disc-para fw-normal m-0 text-capitalize"><span>03:00pm</span> - <span>06:00pm (UTC)</span></p>
                                </div>
                                <div class="event-datetime-detail d-flex justify-content-start align-items-center gap-3">
                                    <label class="course-disc-title sm-hd text-black m-0 text-capitalize">
                                        Date :
                                    </label>
                                    <p class="course-disc-para fw-normal m-0 text-capitalize">September 6, 2024</p>
                                </div>
                                <div class="event-datetime-detail d-flex justify-content-start align-items-center gap-3">
                                    <label class="course-disc-title sm-hd text-black m-0 text-capitalize">
                                        Date :
                                    </label>
                                    <p class="course-disc-para fw-normal m-0 text-capitalize">Alaska</p>
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



<script>
    // tip video js

    const video = document.querySelector(".event-trailor-video");
    const playPauseBtn = document.querySelector(".playPauseBtn");
    const playPauseIcon = document.querySelector(".playPauseIcon");

    playPauseBtn?.addEventListener("click", function() {
        if (video.paused) {
            video.play();
            playPauseIcon.classList.remove("fa-play");
            playPauseIcon.classList.add("fa-pause");
        } else {
            video.pause();
            playPauseIcon.classList.remove("fa-pause");
            playPauseIcon.classList.add("fa-play");
        }
    });
</script>