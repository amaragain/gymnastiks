<!DOCTYPE html>
<html lang="en">

<head>

    <?php $page = 'direction';?>

    <?php include('header.php');?>

    <?php include('analytics.php');	?>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>

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
                <h1 class="overlay-title">Competitive Gymnastics</h1>
                <p class="overlay-text">
                    This is for those who dreams about participating and winning gymnastics competitions
                </p>
            </div>
        </div>
    </section>


    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-ul font-weight-bold">Competitive Gymnastics Training Program</h2> <br>
                </div>
                <div class="col-md-6">
                    <p class="">
                        From our <a class="text-ul" href="/programs/recreational-gymnastics">recreational</a> and <a class="text-ul" href="/programs/pre-competitive-gymnastics">pre-competitive</a> gymnastics training programs we select students who have the talent, dedication, & work ethic
                        it takes to become a competitive gymnast! We train them to compete under district level, state
                        level, national level and then finally international level.
                    </p>
                    <p class="">
                        The Competitive program in our gym consists of many levels. It is our main goal and focus to
                        place each gymnast in the level which she can be challenged and succeed simultaneously. From
                        this program we aspire to help each gymnast become her personal best and bring her personal
                        dreams within grasping reach.
                    </p>
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
                        Timing for competitive gymnastics classes
                    </h3>
                    <table class="table table-bordered table-responsive">
                        <tr>
                            <th>Everyday</th>
                            <td>04:00pm - 07:30pm</td>
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


    <?php include('footer.php'); ?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/499c17c7f3.js" crossorigin="anonymous"></script>
    <script src="/assets/js/custom.js" async></script>

    <?php include('modals/register.php'); ?>

</body>

</html>