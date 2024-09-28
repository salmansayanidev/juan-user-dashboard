</div>
</div>
<script src="./assets/js/jquery.min.js"></script>
<script src="./assets/js/bootstrap.bundle.min.js"></script>
<script src="./assets/js/slick.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>


<script>
    // Initially hide the dropdown links
    $(".sidebar-dropdown-link").hide();

    // Toggle dropdown when the button is clicked
    $(".sidebar-drop-btn").on("click", function() {
        $(".sidebar-dropdown-link").slideToggle();
    });

    var currentPage = window.location.href;

    // Get all nav links
    var navLinks = document.querySelectorAll(".link, .drop-link");
    for (var i = 0; i < navLinks.length; i++) {
        if (navLinks[i].href === currentPage) {
            navLinks[i].classList.add("active");

            // Check if it's a drop link
            if (navLinks[i].classList.contains("drop-link")) {
                // Show the dropdown if it's active
                $(navLinks[i]).closest(".sidebar-dropdown-link").slideDown();
            } else {
                // Hide the dropdown if it's not active
                $(".sidebar-dropdown-link").slideUp();
            }
        }
    }






    $(".menu-btn").on("click", function() {
        $(".side-bar").addClass("active");
    });


    $(".sidebar-cls-btn").on("click", function() {
        $(".side-bar").removeClass("active");
    });
</script>

</body>

</html>