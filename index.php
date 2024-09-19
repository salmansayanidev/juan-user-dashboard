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

                <div class="col-12 col-lg-9">
                    <div class="index-left-area">
                        <div class="row">
                            <div class="col-12 col-lg-8">
                                <div class="your-progress-assets-area mb-4">
                                    <div class="row">
                                        <div class="col-12 col-lg-6">
                                            <h3 class="sb-title">Your Progress & Assets</h3>
                                            <span class="head-para fw-medium d-block">Achievement</span>
                                            <div class="circular-progress mt-4 flex-column" data-inner-circle-color="white" data-percentage="82" data-progress-color="#FFBB45" data-bg-color="#E2E2E2">
                                                <div class="inner-circle"></div>
                                                <p class="percentage m-0">0%</p>
                                                <p class="circle-text m-0 position-relative">Lorem ipsum</p>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <div class="asset-box mb-4">
                                                <span class="asset-icon-circle" style="--bg-color: #F9A035;">
                                                    <img class="img-fluid" src="./assets/images/asset-icon-1.png" alt="">
                                                </span>
                                                <span class="asset-title">Bitcoin</span>
                                                <div class=" d-flex justify-content-between align-items-center">
                                                    <h4 class="asset-amount m-0">121,6401.26</h4>
                                                    <span class="asset-tag">BTC</span>
                                                </div>
                                            </div>
                                            <div class="asset-box mb-4">
                                                <span class="asset-icon-circle" style="--bg-color: #5E90DB;">
                                                    <img class="img-fluid" src="./assets/images/asset-icon-2.png" alt="">
                                                </span>
                                                <span class="asset-title">Bitcoin</span>
                                                <div class=" d-flex justify-content-between align-items-center">
                                                    <h4 class="asset-amount m-0">121,6401.26</h4>
                                                    <span class="asset-tag">BTC</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="">
                                    <fieldset>
                                        <div class="hero">
                                            <!--<span id="sidebarToggler" role="button" aria-pressed="" title="Close sidebar"><button class="icon-button close" type="button" fdprocessedid="t9ozsg"><span class="bars"></span></button></span>-->
                                            <button type="button" class="close"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                                                </svg></button>
                                            <div id="calendar" class="sidebar-hide"></div>
                                        </div>
                                        <input type="hidden" id="getText" name="calendar_date" value="" readonly class="inputevent-text">
                                        <!-- <input type="button" name="next" class="next action-button" value="Next" /> -->
                                    </fieldset>
                                </div>
                            </div>
                            <div class="col-12 col-lg-8">
                                <div class="your-progress-assets-area">
                                    <div class=" d-flex justify-content-between">
                                        <div class="">
                                            <h3 class="sb-title">Weekly Investment Statistics</h3>
                                            <span class="head-para fw-medium d-block">Updated 1 week ago</span>
                                        </div>
                                        <div class="">
                                            <div class="dropdown text-end">
                                                <button class="btn btn-secondary ellipsis-btn bg-transparent border-0 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end mt-4">
                                        <select class="form-select weekly-investment-select" aria-label="Default select example">
                                            <option selected>July 2021</option>
                                            <option value="1">July 2021</option>
                                            <option value="2">July 2021</option>
                                            <option value="3">July 2021</option>
                                        </select>
                                    </div>
                                    <div id="chartdiv" class="mt-5"></div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="your-progress-assets-area bitcoin-summary-area">
                                    <div class=" d-flex justify-content-between mb-5">
                                        <h3 class="sb-title">Bitcoin Summary</h3>
                                        <span class="bitcoin-summary-date">15 Nov - 20 Nov 2024</span>
                                    </div>
                                    <div class="d-flex justify-content-start gap-4 align-items-center">
                                        <span class="asset-icon-circle sm-circle" style="--bg-color: #F9A035;">
                                            <img class="img-fluid" src="./assets/images/bitcoin-icon.png" alt="">
                                        </span>
                                        <span class="asset-title m-0">Bitcoin</span>
                                    </div>
                                    <div class="bitcoin-summ-amount-area d-flex justify-content-start align-items-end">
                                        <div class="">
                                            <h4 class="bitcoin-summary-amount m-0">7,094.86</h4>
                                        </div>
                                        <div class=" d-flex justify-content-start align-items-center gap-5">
                                            <span class="bitcoin-summ-per">80,82</span>
                                            <span class="bitcoin-summ-per">(1,15%) </span>
                                        </div>
                                    </div>
                                    <div id="chart"></div>
                                    <div class="bitcoin-summ-table-area">
                                        <table class="bitcoin-summ-table w-100">
                                            <tr>
                                                <td>Vol</td>
                                                <td>$7,99B</td>
                                                <td>Shares</td>
                                                <td class="text-light-gray">999.91 M PSEI</td>
                                            </tr>
                                            <tr>
                                                <td>Open</td>
                                                <td class="bright-red">7,008,01</td>
                                                <td>Trades</td>
                                                <td>87.85K</td>
                                            </tr>
                                            <tr>
                                                <td>Low</td>
                                                <td class="bright-red">6,967,87</td>
                                                <td>High</td>
                                                <td class="text-light-gray">7,094.86</td>
                                            </tr>
                                            <tr>
                                                <td>52w L</td>
                                                <td>5,699,30</td>
                                                <td>52w H</td>
                                                <td>7,552,20</td>
                                            </tr>
                                            <tr>
                                                <td>Mkt Cap</td>
                                                <td>0</td>
                                                <td>NFB/s</td>
                                                <td class="text-light-gray">532.16M</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-3">
                    <div class="index-right-area">
                        <div class="your-progress-assets-area">
                            <h3 class="sb-title">Trading Community</h3>
                            <div class="faq-box active mt-5">
								<button type="button" class="faq-btn">
									<div class=" d-flex justify-content-start align-items-center gap-3">
                                        <span class="faq-icon">
                                            <i class="fa-solid fa-angle-down"></i>
                                        </span>
                                        <span class="faq-question">Nick's Traders</span>
                                    </div>
                                    <div class="">
                                        <span class="faq-icon">
                                            <i class="fa-solid fa-minus"></i>
                                        </span>
                                    </div>
								</button>
								<div class="faq-text-area">
									<ul class="trading-community-list">
                                        <li class="trading-community-li d-flex justify-content-between align-items-center">
                                            <div class=" d-flex justify-content-start gap-4 align-items-center">
                                                <span class="trad-comm-circle"></span>
                                                <h3 class="trading-community-name m-0">Forex-Trades</h3>
                                            </div>
                                            <div class="">
                                                <img class="img-fluid" src="./assets/images/chart-img.png" alt="">
                                            </div>
                                        </li>
                                        <li class="trading-community-li d-flex justify-content-between align-items-center">
                                            <div class=" d-flex justify-content-start gap-4 align-items-center">
                                                <span class="trad-comm-circle"></span>
                                                <h3 class="trading-community-name m-0">Forex-Trades</h3>
                                            </div>
                                            <div class="">
                                                <img class="img-fluid" src="./assets/images/chart-img.png" alt="">
                                            </div>
                                        </li>
                                        <li class="trading-community-li d-flex justify-content-between align-items-center">
                                            <div class=" d-flex justify-content-start gap-4 align-items-center">
                                                <span class="trad-comm-circle"></span>
                                                <h3 class="trading-community-name m-0">Forex-Trades</h3>
                                            </div>
                                            <div class="">
                                                <img class="img-fluid" src="./assets/images/chart-img.png" alt="">
                                            </div>
                                        </li>
                                    </ul>
								</div>
							</div>
                            <div class="faq-box active mt-5">
								<button type="button" class="faq-btn">
									<div class=" d-flex justify-content-start align-items-center gap-3">
                                        <span class="faq-icon">
                                            <i class="fa-solid fa-angle-down"></i>
                                        </span>
                                        <span class="faq-question">Nick's Traders</span>
                                    </div>
                                    <div class="">
                                        <span class="faq-icon">
                                            <i class="fa-solid fa-minus"></i>
                                        </span>
                                    </div>
								</button>
								<div class="faq-text-area">
									<ul class="trading-community-list">
                                        <li class="trading-community-li d-flex justify-content-between align-items-center">
                                            <div class=" d-flex justify-content-start gap-4 align-items-center">
                                                <span class="trad-comm-circle"></span>
                                                <h3 class="trading-community-name m-0">Forex-Trades</h3>
                                            </div>
                                            <div class="">
                                                <img class="img-fluid" src="./assets/images/chart-img.png" alt="">
                                            </div>
                                        </li>
                                        <li class="trading-community-li d-flex justify-content-between align-items-center">
                                            <div class=" d-flex justify-content-start gap-4 align-items-center">
                                                <span class="trad-comm-circle"></span>
                                                <h3 class="trading-community-name m-0">Forex-Trades</h3>
                                            </div>
                                            <div class="">
                                                <img class="img-fluid" src="./assets/images/chart-img.png" alt="">
                                            </div>
                                        </li>
                                        <li class="trading-community-li d-flex justify-content-between align-items-center">
                                            <div class=" d-flex justify-content-start gap-4 align-items-center">
                                                <span class="trad-comm-circle"></span>
                                                <h3 class="trading-community-name m-0">Forex-Trades</h3>
                                            </div>
                                            <div class="">
                                                <img class="img-fluid" src="./assets/images/chart-img.png" alt="">
                                            </div>
                                        </li>
                                    </ul>
								</div>
							</div>
                            <div class="faq-box active mt-5">
								<button type="button" class="faq-btn">
									<div class=" d-flex justify-content-start align-items-center gap-3">
                                        <span class="faq-icon">
                                            <i class="fa-solid fa-angle-down"></i>
                                        </span>
                                        <span class="faq-question">Nick's Traders</span>
                                    </div>
                                    <div class="">
                                        <span class="faq-icon">
                                            <i class="fa-solid fa-minus"></i>
                                        </span>
                                    </div>
								</button>
								<div class="faq-text-area">
									<ul class="trading-community-list">
                                        <li class="trading-community-li d-flex justify-content-between align-items-center">
                                            <div class=" d-flex justify-content-start gap-4 align-items-center">
                                                <span class="trad-comm-circle"></span>
                                                <h3 class="trading-community-name m-0">Forex-Trades</h3>
                                            </div>
                                            <div class="">
                                                <img class="img-fluid" src="./assets/images/chart-img.png" alt="">
                                            </div>
                                        </li>
                                        <li class="trading-community-li d-flex justify-content-between align-items-center">
                                            <div class=" d-flex justify-content-start gap-4 align-items-center">
                                                <span class="trad-comm-circle"></span>
                                                <h3 class="trading-community-name m-0">Forex-Trades</h3>
                                            </div>
                                            <div class="">
                                                <img class="img-fluid" src="./assets/images/chart-img.png" alt="">
                                            </div>
                                        </li>
                                        <li class="trading-community-li d-flex justify-content-between align-items-center">
                                            <div class=" d-flex justify-content-start gap-4 align-items-center">
                                                <span class="trad-comm-circle"></span>
                                                <h3 class="trading-community-name m-0">Forex-Trades</h3>
                                            </div>
                                            <div class="">
                                                <img class="img-fluid" src="./assets/images/chart-img.png" alt="">
                                            </div>
                                        </li>
                                    </ul>
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
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="https://cdn.jsdelivr.net/npm/evo-calendar@1.1.3/evo-calendar/js/evo-calendar.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/color-calendar/dist/bundle.min.js"></script>
<script src="./assets/js/index.js"></script>



