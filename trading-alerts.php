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

                        <div class="position-relative">
                            <div id="trade-chartContainer" style="height: 450px; width: 100%;"></div>
                            <img id="loader" src="https://canvasjs.com/wp-content/uploads/images/gallery/javascript-stockcharts/overview/loading.gif" style="position: absolute; top: 150px; left: 48%; display: none" />
                        </div>
                        
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
            dataPoints2 = [];
        var stockChart = new CanvasJS.StockChart("trade-chartContainer", {
            title: {
                text: ""
            },
            
            rangeChanged: rangeChanged,
            charts: [{
                axisY2: {
                    prefix: "$"
                },
                data: [{
                    type: "candlestick",
                    yValueFormatString: "$#,###.##",
                    axisYType: "secondary",
                    risingColor: "#02BBA9",           // Color for rising candles (teal)
                    fallingColor: "#FF6A63",          // Color for falling candles (red)
                    risingBorderColor: "#02BBA9",     // Border color matching rising candle
                    fallingBorderColor: "#FF6A63",    // Border color matching falling candle
                    risingLineColor: "#02BBA9",       // Wick color for rising candles
                    fallingLineColor: "#FF6A63",      // Wick color for falling candles
                    dataPoints: dataPoints1
                }]
            }],
        });

        function addData(data) {
            stockChart.options.charts[0].data[0].dataPoints = [];
            for (var i = 0; i < data.length; i++) {
                stockChart.options.charts[0].data[0].dataPoints.push({
                    x: new Date(data[i].dateTime * 1000),
                    y: [Number(data[i].open), Number(data[i].high), Number(data[i].low), Number(data[i].close)]
                });
            }
            stockChart.render();
        }

        function rangeChanged(e) {
            var minimum = parseInt(e.minimum / 1000);
            var maximum = parseInt(e.maximum / 1000);
            var url = "https://canvasjs.com/services/data/datapoints-bitcoinusd.php?minimum=" + minimum + "&maximum=" + maximum;
            $("#loader").css("display", "block");
            $.getJSON(url, function(data) {
                addData(data);
                $("#loader").css("display", "none");
            });
        }
        $("#loader").css("display", "block");
        $.getJSON("https://canvasjs.com/services/data/datapoints-bitcoinusd.php", function(data) {
            for (var i = 0; i < data.length; i++) {
                dataPoints1.push({
                    x: new Date(data[i].dateTime * 1000),
                    y: [Number(data[i].open), Number(data[i].high), Number(data[i].low), Number(data[i].close)]
                });
                dataPoints2.push({
                    x: new Date(data[i].dateTime * 1000),
                    y: Number(data[i].close)
                });
            }
            $("#loader").css("display", "none");
            stockChart.render();
        });
    }
</script>




