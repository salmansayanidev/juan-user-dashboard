// main tabing js

const analysisMainTabs = document.querySelectorAll("[data-view]");

analysisMainTabs.forEach((tab) => {
    tab.addEventListener("click", () => {
        analysisMainTabs.forEach((tab) => {
            tab.classList.remove("active");
        });
        $("[data-content]").removeClass('active')
        $(`[data-content="${tab.dataset.view}"]`).addClass('active')
        tab.classList.add("active");
    });
});


// tip video js

const videos = document.querySelectorAll(".analysis-archive-video");
const playPauseBtns = document.querySelectorAll(".analysis-playPauseBtn");
const playPauseIcons = document.querySelectorAll(".playPauseIcon");
const playBtnTexts = document.querySelectorAll('.play-btn-text');

// Function to pause all videos except the current one
function pauseAllVideos(currentVideo) {
    videos.forEach((video, index) => {
        if (video !== currentVideo) {
            video.pause();
            playPauseIcons[index].classList.remove("fa-pause");
            playPauseIcons[index].classList.add("fa-play");
            playBtnTexts[index].textContent = "Play Video";

            // Remove active class from parent
            const parent = video.closest('.analysis-archive');
            parent.classList.remove('active');
        }
    });
}

playPauseBtns.forEach((btn, index) => {
    btn?.addEventListener("click", function() {
        const video = videos[index];
        const playPauseIcon = playPauseIcons[index];
        const playBtnText = playBtnTexts[index];
        const parent = video.closest('.analysis-archive');

        if (video.paused) {
            pauseAllVideos(video);
            video.play();
            playPauseIcon.classList.remove("fa-play");
            playPauseIcon.classList.add("fa-pause");
            playBtnText.textContent = "Paused video";


            parent.classList.add('active');
        } else {
            video.pause();
            playPauseIcon.classList.remove("fa-pause");
            playPauseIcon.classList.add("fa-play");
            playBtnText.textContent = "Play Video";


            parent.classList.remove('active');
        }
    });
});



window.onload = function() {

    var limit = 900;
    var y = 100;
    var data = [];
    var dataSeries = {
        type: "line",
        color: "#6da13e"
    };
    var dataPoints = [];
    for (var i = 0; i < limit; i += 1) {
        y += Math.round(Math.random() * 10 - 5);
        dataPoints.push({
            x: i,
            y: y
        });
    }
    dataSeries.dataPoints = dataPoints;
    data.push(dataSeries);

    //Better to construct options first and then pass it as a parameter
    var options = {
        zoomEnabled: true,
        animationEnabled: true,
        title: {
            text: ""
        },
        axisY: {
            lineThickness: 1
        },
        data: data // random data
    };

    var chart = new CanvasJS.Chart("chartContainer-analysis", options);
    // var startTime = new Date();
    chart.render();
    // var endTime = new Date();
    // document.getElementById("timeToRender").innerHTML = "Time to Render: " + (endTime - startTime) + "ms";

}