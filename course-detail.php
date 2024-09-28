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
                    <div class="course-detail-area">
                        <div class="row">
                            <div class="col-12">
                                <img class="img-fluid course-detail-img" src="./assets/images/course-detail-img.png" alt="">

                                <div class="d-flex justify-content-start gap-5 align-items-center mt-5 mb-5">
                                    <div class="">
                                        <span class="course-tag fw-medium">Trading</span>
                                    </div>
                                    <div class=" d-flex justify-content-end align-items-center gap-3">
                                        <i class="fa-solid fa-star fs-4 text-light-orange"></i>
                                        <span class="course-tag fw-normal text-slate-purple p-0 bg-transparent">(4.8 Reviews)</span>
                                    </div>
                                </div>

                                <h2 class="course-detail-title mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry</h2>

                                <div class="course-admin-pro d-flex justify-content-start align-items-center">
                                    <div class="position-relative d-flex justify-content-start align-items-center gap-4">
                                        <img class="img-fluid course-admin-img" src="./assets/images/profile-img.png" alt="">
                                        <span class="course-admin-tag">By <a class="text-decoration-none" href="#">Admin</a></span>
                                    </div>
                                    <div class="position-relative d-flex justify-content-start align-items-center gap-4">
                                        <i class="fa-regular fa-calendar text-light-orange fs-3"></i>
                                        <span class="course-admin-tag-2 ">05/09/2024</span>
                                    </div>
                                    <div class="position-relative d-flex justify-content-start align-items-center gap-4">
                                        <i class="fa-solid fa-graduation-cap text-light-orange fs-3"></i>
                                        <span class="course-admin-tag-2">2250 Students</span>
                                    </div>
                                </div>

                                <ul class="course-tabs-btns-list d-flex justify-content-start align-items-center">
                                    <li class="">
                                        <button class=" course-tabs-btn active" type="button" data-view="Overview">Overview</button>
                                    </li>
                                    <li class="">
                                        <button class=" course-tabs-btn " type="button" data-view="Curriculum">Curriculum</button>
                                    </li>
                                    <li class="">
                                        <button class=" course-tabs-btn " type="button" data-view="Instructors">Instructors</button>
                                    </li>
                                    <li class="">
                                        <button class=" course-tabs-btn " type="button" data-view="Reviews">Reviews</button>
                                    </li>
                                </ul>

                                <div class="course-discription-area">

                                    <div data-content="Overview" class="course-tab-content active">
                                        <h3 class="course-disc-title text-black text-black mb-4">Course Description</h3>
                                        <p class="course-disc-para fw-normal mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages</p>

                                        <h3 class="course-disc-title text-black text-black mb-4">What you'll learn in this course?</h3>
                                        <p class="course-disc-para fw-normal mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                                        <ul class="course-detail-disc-list">
                                            <li class="d-flex justify-content-start gap-3 ">
                                                <span class="circle-angel"><i class="fa-solid fa-angle-right"></i></span>
                                                <p class="list-disc-para fw-medium text-black">Lorem Ipsum is simply dummy text of the printing</p>
                                            </li>
                                            <li class="d-flex justify-content-start gap-3 ">
                                                <span class="circle-angel"><i class="fa-solid fa-angle-right"></i></span>
                                                <p class="list-disc-para fw-medium text-black">Lorem Ipsum is simply dummy text of the printing</p>
                                            </li>
                                            <li class="d-flex justify-content-start gap-3 ">
                                                <span class="circle-angel"><i class="fa-solid fa-angle-right"></i></span>
                                                <p class="list-disc-para fw-medium text-black">Lorem Ipsum is simply dummy text of the printing</p>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="course-tab-content" data-content="Curriculum"></div>

                                    <div class="course-tab-content" data-content="Instructors"></div>

                                    <div class="course-tab-content" data-content="Reviews"></div>

                                    <a class="course-enroll-link text-decoration-none d-inline-block" href="enrolled-course.php">
                                        Enroll Now
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>

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
    const courseDetailTabs = document.querySelectorAll("[data-view]");

    courseDetailTabs.forEach((tab) => {
        tab.addEventListener("click", () => {
            courseDetailTabs.forEach((tab) => {
                tab.classList.remove("active");
            });
            $("[data-content]").removeClass('active')
            $(`[data-content="${tab.dataset.view}"]`).addClass('active')
            tab.classList.add("active");
        });
    });
</script>