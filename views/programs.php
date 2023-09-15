<!DOCTYPE html>
<html lang="en">

<head>

    <?php $page = 'programs';?>

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
                    srcset="/assets/img/banner/viswajit-nikhath-gymnastics-bangalore-gymnastics-center-1000x667.jpg">
                <source media="(min-width:426px)"
                    srcset="/assets/img/banner/viswajit-nikhath-gymnastics-bangalore-gymnastics-center-768x512.jpg">
                <source media="(min-width:100px)"
                    srcset="/assets/img/banner/viswajit-nikhath-gymnastics-bangalore-gymnastics-center-425x283.jpg">
                <img src="/assets/img/banner/viswajit-nikhath-gymnastics-bangalore-gymnastics-center-425x283.jpg"
                    alt="Viswajit Nikhath Gymnastiks" class="img-responsive overlay-enabled"
                    style="aspect-ratio:425/283">
            </picture>


            <div class="banner-overlay">
                <h1 class="overlay-title">Gymnastics Training Programs</h1>
                <p class="overlay-text">
                    We have training programs designed for everyone. You just need to choose the right one.
                </p>
            </div>
        </div>
    </section>

    <section class="programs-section bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-ul">Gymnastics training programs</h2>
                    <p class="">
                        When it comes to gymnastics training, we offer programs to everyone's needs.
                    </p>
                    <h3>
                        See below all our programs
                    </h3>
                    <br>

                    <?php 
                        show_programs();
                    ?>

                </div>
            </div>
        </div>
    </section>


    <!--<section class="programs-section bg-dark">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-md-12">-->
    <!--                <h3 >-->
    <!--                    Millions of Indians cheered when Dipa Karmakar made it to the vault finals in Rio 2016 and finished fourth.-->
    <!--                </h3>-->
    <!--                <iframe width="100%" style="min-height: 500px" src="https://www.youtube.com/embed/Vi_il_XjT8c" title="Gymnastics training in Bangalore" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->

    <?php include('footer.php'); ?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/499c17c7f3.js" crossorigin="anonymous"></script>
    <script src="/assets/js/custom.js" async></script>

    <?php include('modals/register.php'); ?>

</body>

</html>