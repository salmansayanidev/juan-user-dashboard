
// progress bar js

const circularProgress = document.querySelectorAll(".circular-progress");

Array.from(circularProgress).forEach((progressBar) => {
  const progressValue = progressBar.querySelector(".percentage");
  const innerCircle = progressBar.querySelector(".inner-circle");
  let startValue = 0,
    endValue = Number(progressBar.getAttribute("data-percentage")),
    speed = 50,
    progressColor = progressBar.getAttribute("data-progress-color");

  const progress = setInterval(() => {
    startValue++;
    progressValue.textContent = `${startValue}%`;
    progressValue.style.color = `${progressColor}`;

    innerCircle.style.backgroundColor = `${progressBar.getAttribute(
      "data-inner-circle-color"
    )}`;

    progressBar.style.background = `conic-gradient(${progressColor} ${
      startValue * 3.6
    }deg,${progressBar.getAttribute("data-bg-color")} 0deg)`;
    if (startValue === endValue) {
      clearInterval(progress);
    }
  }, speed);
});

// calender js

$(document).ready(function () {
  $("#calendar").evoCalendar({
    format: "mm/dd/yyyy",
  });

  // Click event for elements with class "close"
  $(".close").click(function () {
    console.log("Close button clicked");
    $(".event-hide").toggleClass("sidebar-hide");
  });

  // Click event for the calendar
  $("#calendar").click(function () {
    console.log("remove sidebar hide");
    $(".event-hide").addClass("sidebar-hide");
  });

  // Ensure buttons in the calendar are of type "button"
  $("#calendar").find("button").attr("type", "button");

  // Add "event-hide" class to the calendar
  var calendarElement = document.getElementById("calendar");
  calendarElement.classList.add("event-hide");
});

// accordion js

// faqs js

$(".faq-text-area").hide();
$(".faq-box.active").find(".faq-text-area").show();

$(".faq-btn").click(function () {
  var $currentFaqBox = $(this).closest(".faq-box");
  $currentFaqBox.toggleClass("active");

  if ($currentFaqBox.hasClass("active")) {
    $currentFaqBox.find(".faq-text-area").slideDown();
  } else {
    $currentFaqBox.removeClass("active");
    $currentFaqBox.find(".faq-text-area").slideUp();
  }
});

// chart 2 js

// Define the series object with monthDataSeries1
var series = {
  monthDataSeries1: {
    prices: [
      8107.85, 8128.0, 8122.9, 8165.5, 8340.7, 8423.7, 8423.5, 8514.3, 8481.85,
      8487.7, 8506.9, 8626.2,
    ],
    dates: [
      "2023-09-01",
      "2023-09-02",
      "2023-09-03",
      "2023-09-04",
      "2023-09-05",
      "2023-09-06",
      "2023-09-07",
      "2023-09-08",
      "2023-09-09",
      "2023-09-10",
      "2023-09-11",
      "2023-09-12",
    ],
  },
};

var options = {
  series: [
    {
      name: "STOCK ABC",
      data: series.monthDataSeries1.prices,
    },
  ],
  chart: {
    type: "area",
    height: 140,
    zoom: {
      enabled: false,
    },
    dropShadow: {
      enabled: true,
      top: 0,
      left: 0,
      blur: 0, // Reduce the blur to make the shadow smaller
      opacity: 1, // Reduce opacity to lessen the border effect
      width: 2,
    },
  },
  dataLabels: {
    enabled: false,
  },
  stroke: {
    curve: "straight",
  },
  colors: ["#FF7C74"], // Set the area color to your preferred color
  title: {
    text: "",
    align: "left",
  },
  subtitle: {
    text: "",
    align: "left",
  },
  labels: series.monthDataSeries1.dates,
  xaxis: {
    type: "datetime",
    labels: {
      show: false, // Hide x-axis labels
    },
  },
  yaxis: {
    opposite: true,
    labels: {
      show: false, // Hide y-axis labels
    },
  },
  grid: {
    show: false, // Hide background grid lines and border
  },
  legend: {
    horizontalAlign: "left",
  },
};

var chart = new ApexCharts(document.querySelector("#chart"), options);
chart.render();



//  Chart 1 code
am5.ready(function () {
  // Create root element
  var root = am5.Root.new("chartdiv");

  // Set themes
  root.setThemes([am5themes_Animated.new(root)]);

  // Create chart
  var chart = root.container.children.push(
    am5xy.XYChart.new(root, {
      panX: true,
      panY: true,
      wheelX: false,
      wheelY: false,
      pinchZoomX: false,
      paddingLeft: 0,
      layout: root.verticalLayout,
    })
  );

  chart.set(
    "colors",
    am5.ColorSet.new(root, {
      colors: [
        am5.color(0xffbb45),
        am5.color(0xc77e00),
        am5.color(0xffdca0),
        am5.color(0xfff3df),
        am5.color(0xffbb45),
        am5.color(0xc77e00),
        am5.color(0xffdca0),
      ],
    })
  );

  // Create axes
  var xRenderer = am5xy.AxisRendererX.new(root, {
    minGridDistance: 50,
    minorGridEnabled: true,
  });

  xRenderer.grid.template.setAll({
    location: 1,
  });

  var xAxis = chart.xAxes.push(
    am5xy.CategoryAxis.new(root, {
      maxDeviation: 0.3,
      categoryField: "day",
      renderer: xRenderer,
      tooltip: am5.Tooltip.new(root, {}),
    })
  );

  var yAxis = chart.yAxes.push(
    am5xy.ValueAxis.new(root, {
      maxDeviation: 0.3,
      min: 0,
      renderer: am5xy.AxisRendererY.new(root, {
        strokeOpacity: 0.1,
      }),
    })
  );

  // Add label to format Y axis values with 'h' suffix
  yAxis.get("renderer").labels.template.set("text", "{value}h");

  // Create series
  var series = chart.series.push(
    am5xy.ColumnSeries.new(root, {
      name: "Series 1",
      xAxis: xAxis,
      yAxis: yAxis,
      valueYField: "hours",
      categoryXField: "day",
      tooltip: am5.Tooltip.new(root, {
        labelText: "{valueY}h",
      }),
    })
  );

  series.columns.template.setAll({
    tooltipY: 0,
    tooltipText: "{categoryX}: {valueY}h",
    strokeWidth: 0,
    cornerRadiusTL: 100,
    cornerRadiusTR: 100,
  });

  series.columns.template.adapters.add("fill", function (fill, target) {
    return chart.get("colors").getIndex(series.columns.indexOf(target));
  });

  // Set data
  var data = [
    {
      day: "MON",
      hours: 4,
    },
    {
      day: "TUE",
      hours: 2,
    },
    {
      day: "WED",
      hours: 3,
    },
    {
      day: "THU",
      hours: 1,
    },
    {
      day: "FRI",
      hours: 3,
    },
    {
      day: "SAT",
      hours: 2,
    },
    {
      day: "SUN",
      hours: 1,
    },
  ];

  xAxis.data.setAll(data);
  series.data.setAll(data);

  // Animate on load
  series.appear(1000);
  chart.appear(1000, 100);
}); // end am5.ready()
