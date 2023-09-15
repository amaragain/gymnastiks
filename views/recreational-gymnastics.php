<!DOCTYPE html>
<html lang="en">

<head>

    <?php $page = 'recreational-gymnastics';?>

    <?php include('header.php');?>

    <?php include('analytics.php');	?>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <?php  include('chunks/program_data.php'); ?>  

</head>

<body>

    <?php include('menu.php');?>
    <!-- <section>
        <div class="banner banner-video main-video-banner">
            <video id="videoBannerRecreationalGym" autoplay muted loop class="banner-video">
                <source src="/assets/videos/banner/recreational-gymnastics-viswajit-nikhath-gymnastiks.mp4" type="video/mp4">
            </video>
            <div class="video-overlay">
                <h1 class="overlay-title">Join Recreational Gymnastics Classes</h1>
                <p>Having more than one program to choose from, </p>
            </div>
        </div>
    </section> -->



    <section>
        <div class="banner">
            <picture>
                <source media="(min-width:1024px)"
                    srcset="/assets/img/banner/recreational-gymnastics-viswajit-nikhath-gymnastiks-1000x600.jpg">
                <source media="(min-width:426px)"
                    srcset="/assets/img/banner/recreational-gymnastics-viswajit-nikhath-gymnastiks-768x460.jpg">
                <source media="(min-width:100px)"
                    srcset="/assets/img/banner/recreational-gymnastics-viswajit-nikhath-gymnastiks-425x255.jpg">
                <img src="/assets/img/banner/recreational-gymnastics-viswajit-nikhath-gymnastiks-425x255.jpg"
                    alt="Viswajit nikhath gymnastiks" class="img-responsive overlay-enabled"
                    style="aspect-ratio:425/255">
            </picture>


            <div class="banner-overlay">
                <h1 class="overlay-title">Join Recreational Gymnastics Classes</h1>
                <p class="overlay-text">
                    <!-- No matter your age, gymnastics will bring you back to the days when childlike wonder filled every
                    moment. -->
                </p>
            </div>
        </div>
    </section>


    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <h2 class="text-ul font-weight-bold">Recreational Gymnastics</h2> <br>
                </div>
                <div class="col-md-6">

                    <!-- <div class="well">
                        <b>Based on the skill progression students are promoted to different levels. The recreational program </b>
                    </div> -->

                    <p class="">
                        Recreational gymnastics, as its name suggests, caters to anyone from your little or big ones who
                        are just starting out in the sport, to seasoned gymnasts who’d like to train without the
                        pressure of competitions. 
                        
                        After all, it’s never too late to start, and this sport caters to  anyone looking to enjoy its benefits!

                    </p>
                    <br>

                    <p class="">
                        In short, recreational gymnasts get to cement the fundamentals of the sport through classes, and
                        can transfer the techniques and skills they’ve picked up to plenty of other sports later in
                        life.
                    </p>

                    <br>
                    <h3>
                        Recreational gymnastics class timings
                    </h3>
                    <table class="table table-bordered table-responsive">
                        <tr>
                            <th>Monday to Friday</th>
                            <td>04:30pm - 05:30pm</td>
                        </tr>
                        <tr>
                            <th>Monday to Friday</th>
                            <td>05:30pm - 06:30pm</td>
                        </tr>
                        <tr>
                            <th>Monday to Friday</th>
                            <td>06:30pm - 07:30pm</td>
                        </tr>
                    </table>
                    <br>

                    <p class="text-center">
                        <a class="btn oval-btn" target="_blank" rel="noopener noreferrer"
                            data-event="whatsapp-recreational-gymnast"
                            href='https://wa.me/919164636350/?text=Hi,%20I%20was%20checking%20your%20website%20and%20I%20would%20like%20to%20know%20more%20about%20the%20Recreational%20Gymnastics%20Training%20Program.'>
                            Join Now &nbsp; <i class="fab fa-whatsapp fa-lg"></i>
                        </a>
                    </p>
                    

                    <h2 class="text-ul font-weight-bold">Benifits of Recreational Gymnastics</h2> <br>

                    <p>
                        Recreational gymnastics is an excellent addition to any child’s healthy lifestyle. It’s a high
                        intensity sport, burning calories and helping to gain muscle tone, flexibility and balance.
                    </p>
                    <br>
                    <p>
                        <b>Health wise, there is almost no better sport than gymnastics for a developing child to take part in.</b>
                    </p>
                    <br>
                    <p>
                        The skills and developmental advances gained from doing gymnastics – even recreationally – will benefit
                        them in any other sports they take part in, as well as in social situations and with discipline
                        around schoolwork, etc.
                    </p>

         
                    <br>

                </div>
                <div class="col-md-6">
                    <div class="banner">
                        <picture>
                            <source media="(min-width:1024px)"
                                srcset="/assets/img/banner/recreational-gymnastics-classes-768x512.jpg">
                            <source media="(min-width:426px)"
                                srcset="/assets/img/banner/recreational-gymnastics-classes-768x512.jpg">
                            <source media="(min-width:100px)"
                                srcset="/assets/img/banner/recreational-gymnastics-classes-425x283.jpg">
                            <img src="/assets/img/banner/recreational-gymnastics-classes-425x283.jpg"
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
                        show_programs(['adult', 'precompetitive', 'competitive', 'toddler', 'adhd']);
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