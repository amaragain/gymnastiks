<!DOCTYPE html>
<html lang="en">

<head>

    <?php $page = 'adhd-gymnastics';?>

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
                    srcset="/assets/img/banner/gymnastics-for-adhd-child-viswajit-nikhath-gymnastiks-1000x600.jpg">
                <source media="(min-width:426px)"
                    srcset="/assets/img/banner/gymnastics-for-adhd-child-viswajit-nikhath-gymnastiks-768x460.jpg">
                <source media="(min-width:100px)"
                    srcset="/assets/img/banner/gymnastics-for-adhd-child-viswajit-nikhath-gymnastiks-425x255.jpg">
                <img src="/assets/img/banner/gymnastics-for-adhd-child-viswajit-nikhath-gymnastiks-425x255.jpg"
                    alt="Viswajit nikhath gymnastiks" class="img-responsive overlay-enabled"
                    style="aspect-ratio:425/255">
            </picture>


            <div class="banner-overlay">
                <h1 class="overlay-title">Gymnastics for Children with ADHD</h1>
                <p class="overlay-text">
                    <!-- Gymnastics has  Attention-deficit/hyperactivity disorder (ADHD) -->
                    Teaching gymnastics for your ADHD-afflicted child is a wonderful way to improve academic and
                    behavioral problems
                </p>
            </div>
        </div>
    </section>


    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-ul font-weight-bold">Gymnastics Training Helps Children With ADHD</h2> <br>
                </div>
                <div class="col-md-6">

                    <p class="">
                        Gymnastics and other sports provide an ideal outlet for children with Attention Deficit
                        Hyperactivity Disorder (ADHD), a condition affecting 5% of school-age kids.
                    </p>

                    <p class="">
                        It frequently results in hyper behavior and difficulties paying attention and controlling
                        impulses. ADHD is more common among boys than girls and can last through the teenage years and
                        even into adulthood.
                    </p>

                    <p class="">
                        The decision to enroll your ADHD-afflicted child in gymnastics is a wonderful way to improve
                        academic and behavioral problems.
                    </p>


                    <h3>Cardiovascular Benefits of Gymnastics</h3>
                    <P>
                        While scientists have yet to conduct a study about the association between gymnastics and
                        ADHD, the sport undeniably provides the intense cardiovascular and strength building activity
                        necessary to promote a healthy brain and body. In one session, children run, stretch, and swing,
                        all
                        of which helps reduce stress, improve mood, and potentially diminish ADHD symptoms.
                    </P>

                    <br>
                    <p class="text-center">
                        <a class="btn oval-btn" target="_blank" rel="noopener noreferrer"
                            data-event="whatsapp-adult-gymnast"
                            href='https://wa.me/919164636350/?text=Hi,%20I%20was%20checking%20your%20website%20and%20I%20would%20like%20to%20know%20more%20about%20the%20ADHD%20Gymnastics%20Training%20Program.'>
                            Contact Us &nbsp; <i class="fab fa-whatsapp fa-lg"></i>
                        </a>
                    </p>
                    <br>
                    <br>
                    <h3>
                        Timing for classes
                    </h3>
                    <table class="table table-bordered table-responsive">
                        <tr>
                            <th>Monday - Friday</th>
                            <td>04:30pm - 05:30pm</td>
                        </tr>
                        <tr>
                            <th>Monday - Friday</th>
                            <td>05:30pm - 06:30pm</td>
                        </tr>
                        <tr>
                            <th>Monday - Friday</th>
                            <td>06:30pm - 07:30pm</td>
                        </tr>
                    </table>
                    <br>

                </div>
                <div class="col-md-6">
                    <div class="banner">
                        <picture>
                            <source media="(min-width:1024px)"
                                srcset="/assets/img/banner/adhd-gymnastics-classes-768x974.jpg">
                            <source media="(min-width:426px)"
                                srcset="/assets/img/banner/adhd-gymnastics-classes-768x974.jpg">
                            <source media="(min-width:100px)"
                                srcset="/assets/img/banner/adhd-gymnastics-classes-425x539.jpg">
                            <img src="/assets/img/banner/adhd-gymnastics-classes-425x539.jpg"
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
                        show_programs(['recreational', 'adult', 'precompetitive', 'competitive', 'toddler']);
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