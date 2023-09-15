<!DOCTYPE html>
<html lang="en">

<head>

    <?php $page = 'toddler-gymnastics';?>

    <?php include('header.php');?>

    <?php include('analytics.php');	?>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <?php  include('chunks/program_data.php'); ?>  

</head>

<body>

    <?php include('menu.php');?>

    <section>
        <div class="banner">
            <picture>
                <source media="(min-width:1024px)"
                    srcset="/assets/img/banner/toddler-gymnastics-viswajit-nikhath-gymnastiks-1000x600.jpg">
                <source media="(min-width:426px)"
                    srcset="/assets/img/banner/toddler-gymnastics-viswajit-nikhath-gymnastiks-768x460.jpg">
                <source media="(min-width:100px)"
                    srcset="/assets/img/banner/toddler-gymnastics-viswajit-nikhath-gymnastiks-425x255.jpg">
                <img src="/assets/img/banner/toddler-gymnastics-viswajit-nikhath-gymnastiks-425x255.jpg"
                    alt="Viswajit nikhath gymnastiks" class="img-responsive overlay-enabled"
                    style="aspect-ratio:425/255">
            </picture>


            <div class="banner-overlay">
                <h1 class="overlay-title">Gymnastics for Toddlers</h1>
                <p class="overlay-text">
                    <!-- Gymnastics has  Attention-deficit/hyperactivity disorder (ADHD) -->
                    Join our toddler gymnastics classes, which is a parent-child program.
                </p>
            </div>
        </div>
    </section>


    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-ul font-weight-bold">Gymnastics and Children</h2> <br>
                </div>
                <div class="col-md-6">
                    <p class="">
                        See below some of the reason why you should train your child gymnastics.
                    </p>
                    <ol>
                        <li>
                            Gymnastics stimulates cognitive growth
                        </li>
                        <li>
                            Gymnastics develops strong and healthy bones
                        </li>
                        <li>
                            Increases coordination and encourages proprioceptive awareness
                        </li>
                        <li>
                            Instils an understanding of discipline
                        </li>
                        <li>
                            Increases social awareness and benefits
                        </li>
                    </ol>

                    <br>
                    <p class="text-center">
                        <a class="btn oval-btn" target="_blank" rel="noopener noreferrer"
                            data-event="whatsapp-toddler-gymnast"
                            href='https://wa.me/919164636350/?text=Hi,%20I%20was%20checking%20your%20website%20and%20I%20would%20like%20to%20know%20more%20about%20the%20Toddler%20Gymnastics%20Training%20Program.'>
                            Contact Us &nbsp; <i class="fab fa-whatsapp fa-lg"></i>
                        </a>
                    </p>
                    <br>
                    <br>

                </div>
                <div class="col-md-6">
                    <div class="banner">
                        <picture>
                            <source media="(min-width:1024px)"
                                srcset="/assets/img/banner/toddler-gymnastics-classes-768x512.jpg">
                            <source media="(min-width:426px)"
                                srcset="/assets/img/banner/toddler-gymnastics-classes-768x512.jpg">
                            <source media="(min-width:100px)"
                                srcset="/assets/img/banner/toddler-gymnastics-classes-425x283.jpg">
                            <img src="/assets/img/banner/toddler-gymnastics-classes-425x283.jpg"
                                alt="Viswajit nikhath gymnastiks" class="img-responsive">
                        </picture>
                        <!-- <img src="/assets/img/banner/4.webp" alt="" class="img-responsive"> -->
                    </div>
                </div>

            </div>
        </div>

    </section>



    <section class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center">
                        See below some of the other Training Programs.
                    </h3>
                    <br>
                    <?php 
                        show_programs(['recreational', 'adult', 'precompetitive', 'competitive', 'adhd']);
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

    <?php include('modals/register.php'); ?>

</body>

</html>