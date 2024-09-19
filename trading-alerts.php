<?php
include "sidebar.php"
?>

<?php
include "header.php"
?>


<main class="main">
    <section class="dashboard-section">
        <div class="container-fluid">
            <div class="row align-items-center">

                <?php include "main-search-area.php" ?>

            </div>

            <div class="row">
                <div class="col-12">
                    <div class="portfolio-state-area mb-4">
                        <h3 class="portfolio-state-title fw-medium text-black mb-4">Portfolio Stats</h3>
                        <span class="portfolio-state-price fw-normal">Price</span>
                        <h3 class="portfolio-state-title fw-medium text-black">$41,561.22</h3>
                        <span class="portfolio-state-price fw-normal">Currency</span>
                        <h3 class="portfolio-state-title fw-medium text-black">USD</h3>

                        <div id="chartContainer" style="height: 500px; width: 100%;"></div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="trading-alert-table-area">
                        <table class="datatables-ajax table-responsive table-stripe table dynamic-table" id="trading-alert-table">
                            <thead>
                                <tr>
                                    <th>CURRENCY NAME</th>
                                    <th>PRICE</th>
                                    <th>CAGR/MONTH</th>
                                    <th>MARKET CAP</th>
                                    <th>STATISTIC</th>
                                    <th>POS</th>
                                    <th>POV</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center gap-4">
                                            <div class="">
                                                <span class="table-curr-icon" style="--bg-color: #FF8933;">
                                                    <img class="img-fluid" src="./assets/images/tabel-icon-1.png" alt="">
                                                </span>
                                            </div>
                                            <div class="">
                                                <span class="">Bitcoin / <span class="text-slate-gray">BTC</span></span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>$1800,24</td>
                                    <td>24,65% / 6</td>
                                    <td>$375. 658 M</td>
                                    <td>
                                        <img class="img-fluid" src="./assets/images/tabel-chart-img.png" alt="">
                                    </td>
                                    <td>
                                        <a class=" text-decoration-none tabel-btn" href="#">
                                            Detail
                                        </a>
                                    </td>
                                    <td>
                                        <button class="tabel-btn bg-transparent" type="button">
                                            Trade
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center gap-4">
                                            <div class="">
                                                <span class="table-curr-icon" style="--bg-color: #4E80FF;">
                                                    <img class="img-fluid" src="./assets/images/tabel-icon-2.png" alt="">
                                                </span>
                                            </div>
                                            <div class="">
                                                <span class="">Bitcoin / <span class="text-slate-gray">BTC</span></span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>$1800,24</td>
                                    <td>24,65% / 6</td>
                                    <td>$375. 658 M</td>
                                    <td>
                                        <img class="img-fluid" src="./assets/images/tabel-chart-img.png" alt="">
                                    </td>
                                    <td>
                                        <a class=" text-decoration-none tabel-btn" href="#">
                                            Detail
                                        </a>
                                    </td>
                                    <td>
                                        <button class="tabel-btn bg-transparent" type="button">
                                            Trade
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center gap-4">
                                            <div class="">
                                                <span class="table-curr-icon" style="--bg-color: #FF569D;">
                                                    <img class="img-fluid" src="./assets/images/tabel-icon-3.png" alt="">
                                                </span>
                                            </div>
                                            <div class="">
                                                <span class="">Bitcoin / <span class="text-slate-gray">BTC</span></span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>$1800,24</td>
                                    <td>24,65% / 6</td>
                                    <td>$375. 658 M</td>
                                    <td>
                                        <img class="img-fluid" src="./assets/images/tabel-chart-img.png" alt="">
                                    </td>
                                    <td>
                                        <a class=" text-decoration-none tabel-btn" href="#">
                                            Detail
                                        </a>
                                    </td>
                                    <td>
                                        <button class="tabel-btn bg-transparent" type="button">
                                            Trade
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center gap-4">
                                            <div class="">
                                                <span class="table-curr-icon" style="--bg-color: #FF8933;">
                                                    <img class="img-fluid" src="./assets/images/tabel-icon-1.png" alt="">
                                                </span>
                                            </div>
                                            <div class="">
                                                <span class="">Bitcoin / <span class="text-slate-gray">BTC</span></span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>$1800,24</td>
                                    <td>24,65% / 6</td>
                                    <td>$375. 658 M</td>
                                    <td>
                                        <img class="img-fluid" src="./assets/images/tabel-chart-img.png" alt="">
                                    </td>
                                    <td>
                                        <a class=" text-decoration-none tabel-btn" href="#">
                                            Detail
                                        </a>
                                    </td>
                                    <td>
                                        <button class="tabel-btn bg-transparent" type="button">
                                            Trade
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center gap-4">
                                            <div class="">
                                                <span class="table-curr-icon" style="--bg-color: #4E80FF;">
                                                    <img class="img-fluid" src="./assets/images/tabel-icon-2.png" alt="">
                                                </span>
                                            </div>
                                            <div class="">
                                                <span class="">Bitcoin / <span class="text-slate-gray">BTC</span></span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>$1800,24</td>
                                    <td>24,65% / 6</td>
                                    <td>$375. 658 M</td>
                                    <td>
                                        <img class="img-fluid" src="./assets/images/tabel-chart-img.png" alt="">
                                    </td>
                                    <td>
                                        <a class=" text-decoration-none tabel-btn" href="#">
                                            Detail
                                        </a>
                                    </td>
                                    <td>
                                        <button class="tabel-btn bg-transparent" type="button">
                                            Trade
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


<?php
include "footer.php"
?>

<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script type="text/javascript" src="https://cdn.canvasjs.com/canvasjs.stock.min.js"></script>


<script>
    $(function() {


        $('#trading-alert-table').DataTable({
            processing: true,
            language: {
                paginate: {
                    previous: '<i class="fa-solid fa-angle-left"></i>',
                    next: '<i class="fa-solid fa-angle-right"></i>'
                }
            },
            columns: [{
                    data: 'CURRENCY NAME'
                },
                {
                    data: 'PRICE'
                },
                {
                    data: 'CAGR/MONTH'
                },
                {
                    data: 'MARKET CAP'
                },
                {
                    data: 'STATISTIC'
                },
                {
                    data: 'POS'
                },
                {
                    data: 'POV'
                }
            ],
        });
    });
</script>


<script type="text/javascript">
    window.onload = function() {
        var dataPoints1 = [],
            dataPoints2 = [],
            dataPoints3 = [];
        var stockChart = new CanvasJS.StockChart("chartContainer", {
            exportEnabled: true,
            theme: "light2",
            title: {
                text: ""
            },
            charts: [{
                toolTip: {
                    shared: true
                },
                axisX: {
                    lineThickness: 5,
                    tickLength: 0,
                    labelFormatter: function(e) {
                        return "";
                    },
                    crosshair: {
                        enabled: true,
                        snapToDataPoint: true,
                        labelFormatter: function(e) {
                            return ""
                        }
                    }
                },
                axisY2: {
                    title: "",
                    prefix: "$"
                },
                legend: {
                    verticalAlign: "top",
                    horizontalAlign: "left"
                },
                data: [{
                    name: "Price (in USD)",
                    yValueFormatString: "$#,###.##",
                    axisYType: "secondary",
                    type: "candlestick",
                    risingColor: "blue",
                    fallingColor: "red",
                    dataPoints: dataPoints1
                }]
            }, {
                height: 100,
                toolTip: {
                    shared: true
                },
                axisX: {
                    crosshair: {
                        enabled: true,
                        snapToDataPoint: true
                    }
                },
                axisY2: {
                    prefix: "$",
                    title: "LTC/EUR"
                },
                legend: {
                    horizontalAlign: "left"
                },
                data: [{
                    yValueFormatString: "€#,###.##",
                    axisYType: "secondary",
                    name: "",
                    dataPoints: dataPoints2
                }]
            }],
            navigator: {
                data: [{
                    color: "black",
                    dataPoints: dataPoints3
                }],
                slider: {
                    minimum: new Date(2018, 06, 01),
                    maximum: new Date(2018, 08, 01)
                }
            }
        });
        $.getJSON("https://canvasjs.com/data/docs/ltceur2018.json", function(data) {
            for (var i = 0; i < data.length; i++) {
                dataPoints1.push({
                    x: new Date(data[i].date),
                    y: [Number(data[i].open), Number(data[i].high), Number(data[i].low), Number(data[i].close)],
                    color: data[i].open < data[i].close ? "green" : "red"
                });;
                dataPoints2.push({
                    x: new Date(data[i].date),
                    y: Number(data[i].volume_eur),
                    color: data[i].open < data[i].close ? "green" : "red"
                });
                dataPoints3.push({
                    x: new Date(data[i].date),
                    y: Number(data[i].close)
                });
            }
            stockChart.render();
        });
    }
</script>