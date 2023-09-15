<!DOCTYPE html>
<html lang="en">

<head>

    <?php $page = '404';?>

    <?php include('header.php');?>

    <?php include('analytics.php');	?>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <?php  include('chunks/program_data.php'); ?>  

</head>

<body>


    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5K63F8G" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <?php include('menu.php');?>


    <section class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="font-BrockScript text-center title-404">404</h2>
                </div>
                <div class="col-md-12">
                    <h3 class="text-center">
                        This page doesn't exists.
                    </h3>
                    <br>
                    <p class="text-center">
                        <a href="/" class="btn oval-btn btn-light">
                            <i class="fas fa-angle-double-left fa-lg"></i>
                            Back to Home
                        </a>
                    </p>

                    <br><br>
                </div>

            </div>
        </div>

    </section>



    <section class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center">
                        Our Training Programs
                    </h3>
                    <br>
                    <?php 
                        show_programs();
                    ?>
                    <br><br>
                </div>

            </div>
        </div>
    </section>


    <?php include('footer.php'); ?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/499c17c7f3.js" crossorigin="anonymous"></script>
    <script src="/assets/js/custom.js" async></script>


</body>

</html>