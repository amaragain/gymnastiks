<!DOCTYPE html>
<html lang="en">

<head>

    <?php $page = 'adult-gymnastics';?>

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
                    srcset="/assets/img/banner/adult-gymnastics-viswajit-nikhath-gymnastiks-1000x600.jpg">
                <source media="(min-width:426px)"
                    srcset="/assets/img/banner/adult-gymnastics-viswajit-nikhath-gymnastiks-768x460.jpg">
                <source media="(min-width:100px)"
                    srcset="/assets/img/banner/adult-gymnastics-viswajit-nikhath-gymnastiks-425x255.jpg">
                <img src="/assets/img/banner/adult-gymnastics-viswajit-nikhath-gymnastiks-425x255.jpg"
                    alt="Viswajit nikhath gymnastiks" class="img-responsive overlay-enabled"
                    style="aspect-ratio:425/255">
            </picture>


            <div class="banner-overlay">
                <h1 class="overlay-title">Adult Gymnastics Training Program</h1>
                <p class="overlay-text">
                    No matter your age, gymnastics will bring you back to the days when childlike wonder filled every
                    moment.
                </p>
            </div>
        </div>
    </section>


    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-ul font-weight-bold">Who Can Join the Adult Program?</h2> <br>
                </div>
                <div class="col-md-6">

                    <p class="">
                        Our Adult Gymnastics classes are welcoming to gymnasts 17 or older, at every skill level.
                    </p>
                    <p>If you're over seventeen, adult gymnastics provides a new opportunity to try out an amazing
                        sport.</p> <br>
                    <p><b>There is no experience necessary.</b> </p>
                    
                    <br>
                    <p>
                        This is a great beginner class for anyone who wants to try gymnastics but has not had the
                        opportunity, as well as for former gymnasts who want to shake off the rust and reconnect.
                    </p>
                    <p>
                        Experienced instructors help every prospective gymnast, new or experienced, to feel comfortable
                        and
                        confident on the equipment. You can test yourself in a range of different activities.
                    </p>
                    <p>Adults are taught how to utilize the equipment. They are also taught the fundamentals and skills
                        that are needed to work on the floor. The class is designed to strengthen and condition gymnasts
                        to help them excel in all aspects of gymnastics.</p>


                    <br>
                    <p class="text-center">
                        <a class="btn oval-btn" target="_blank" rel="noopener noreferrer"
                            data-event="whatsapp-adult-gymnast"
                            href='https://wa.me/919164636350/?text=Hi,%20I%20was%20checking%20your%20website%20and%20I%20would%20like%20to%20know%20more%20about%20the%20Adult%20Gymnastics%20Training%20Program.'>
                            Message Us &nbsp; <i class="fab fa-whatsapp fa-lg"></i>
                        </a>
                    </p>
                    <br>
                    <br>
                    <h3>
                        Adult gymnastics class timings
                    </h3>
                    <table class="table table-bordered table-responsive">
                        <tr>
                            <th>Saturdays</th>
                            <td>07:00pm - 08:00pm</td>
                        </tr>
                        <tr>
                            <th>Sundays</th>
                            <td>07:00pm - 08:00pm</td>
                        </tr>
                    </table>
                    <br>

                </div>
                <div class="col-md-6">
                    <div class="banner">
                        <picture>
                            <source media="(min-width:1024px)"
                                srcset="/assets/img/banner/adult-gymnastics-classes-768x512.jpg">
                            <source media="(min-width:426px)"
                                srcset="/assets/img/banner/adult-gymnastics-classes-768x512.jpg">
                            <source media="(min-width:100px)"
                                srcset="/assets/img/banner/adult-gymnastics-classes-425x283.jpg">
                            <img src="/assets/img/banner/adult-gymnastics-classes-425x283.jpg"
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
                        show_programs(['recreational', 'precompetitive', 'competitive', 'toddler', 'adhd']);
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