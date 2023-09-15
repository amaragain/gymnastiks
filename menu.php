<?php
  // Google-TagManager should run only in production
  // Pass "dev_test" as a queryparam to test in production, so that Google-TagManager won't run
  if( $_SERVER['SERVER_NAME'] == 'www.viswajitnikhathgymnastiks.in' && !(strpos($_SERVER['QUERY_STRING'], 'dev_test') > -1) )
  {
?>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5K63F8G"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    <?php
  }
?>



<header>

    <div class="menu-icon">
        <button class="btn vng-btn" aria-label="menu"><i class="fas fa-bars"></i></button>
    </div>

    <div class="container logo">
        <div class="row">
            <div class="col-md-6">
                <a href="/">
                    <img src="/assets/img/menu/logo.png" alt="Viswajit nikhath gymnastiks" class="img-responsive logo-img">
                    <h2 title="Viswajit Nikhath Gymnastiks" class="logo-title font-BrockScript">Viswajit Nikhath Gymnastiks</h2>
                </a>
            </div>
            <div class="col-md-6">
                <div class="container menu">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-xs-12 col-md-8">
                            <div class="menu-item">
                                <a href="/">
                                    <div class="menu-img menu-img-1 bg-center-contain">
                                        <i class="fas fa-home"></i>
                                    </div>
                                    <p class="menu-title">Home</p>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="/programs">
                                    <div class="menu-img menu-img-2 bg-center-contain">
                                        <i class="fas fa-child"></i>
                                    </div>
                                    <p class="menu-title">Programs</p>
                                </a>
                            </div>
                            <!-- <div class="menu-item">
                                <a href="/schedules">
                                    <div class="menu-img menu-img-3 bg-center-contain">
                                        <i class="far fa-clock"></i>
                                    </div>
                                    <p class="menu-title">Schedules</p>
                                </a>
                            </div> -->
                            <div class="menu-item">
                                <a href="/direction">
                                    <div class="menu-img menu-img-4 bg-center-contain">
                                        <i class="fas fa-directions"></i>
                                    </div>
                                    <p class="menu-title">Direction</p>
                                </a>
                            </div>
                            <!-- <div class="menu-item">
                                <a href="/schedules">
                                    <div class="menu-img menu-img-3 bg-center-contain"></div>
                                    <p class="menu-title">Schedules</p>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="/direction">
                                    <div class="menu-img menu-img-4 bg-center-contain"></div>
                                    <p class="menu-title">Home</p>
                                </a>
                            </div> -->
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


<?php
    include('chunks/contact_data.php');
?>