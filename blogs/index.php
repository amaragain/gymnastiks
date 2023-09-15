<?php
    $title = "VNG Blogs";
    $meta_title = $title;
    $meta_description = "";
    $meta_image = "http://" . $_SERVER['SERVER_NAME']  . "/assets/img/viswajit-nikhath-gymnastiks.jpg";
    $post_image = "../assets/img/viswajit-nikhath-gymnastiks.jpg";
    $meta_url = $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF'];
    $meta_keywords = "Gymnastics, Training, Bengaluru, Bangalore, Marathahalli, Excercise, Fitness, Kids, Recreation, Dance, Artistic, Children, Games, Activity, Health, White Field, Kundalahalli";

    
    $url_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    // (A2) REMOVE BASE FOLDER FROM PATH
    // E.G. "/blogs/foo/bar/" > "foo/bar/"
    $base = "/blogs/";
    if (substr($url_path, 0, strlen($base)) == $base) {
    $url_path = substr($url_path, strlen($base));
    }

    // (A3) EXPLODE INTO AN ARRAY
    // E.G. "foo/bar/" > ["foo", "bar"]
    $path_array = explode("/", rtrim($url_path, "/"));

    // print_r($path_array);

    include('prg/fetch_post.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="preconnect" href="https://www.google-analytics.com" />
    <link rel="preconnect" href="https://www.googletagmanager.com" />
    <link rel="preconnect" href="https://static.hotjar.com" />
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Primary Meta Tags -->
    <title> <?php echo $post_title; ?> </title>
    <meta name="title" content="<?php echo $meta_title; ?>">
    <meta name="description" content="<?php echo $meta_title; ?>">
    <meta name="keywords" content="<?php echo $meta_keywords;?>">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $meta_url; ?>">
    <meta property="og:title" content="<?php echo $meta_title; ?>">
    <meta property="og:description" content="<?php echo $meta_title; ?>">
    <meta property="og:image" content="<?php echo $meta_image; ?>">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo $meta_url; ?>">
    <meta property="twitter:title" content="<?php echo $meta_title; ?>">
    <meta property="twitter:description" content="<?php echo $meta_title; ?>">
    <meta property="twitter:image" content="<?php echo $meta_image; ?>">

    

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Fontawesome -->
    <script src="https://use.fontawesome.com/c06e5c3e40.js"></script>


    <link rel="stylesheet" href="/blogs/assets/css/custom.css">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script async src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
        
    <?php include('../analytics.php');?>

</head>

<body>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>VNG Blogs</h2>
                </div>
                <div class="col-md-6">
                    <div class="nav-bar">
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav navbar-right">
                              <li><a href="../">Home</a></li>
                              <li><a href="#">Blogs</a></li>
                              <li><a href="../contact.php">Contact</a></li>
                            </ul>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="separator">

    </div>

    <div class="container-fluid">

        <div class="row">

            <!-- Placeholder Box -->
            <div class="col-lg-2 ad-plcholder" >
                <section>  
                </section>
            </div>

            <!-- Main Content -->
            <div class="col-lg-6 col-md-9 post-plcholder">
                <section>

                <?php 
                    if($title_id == '') {
                ?>
                    <div class="post-list">
                        <?php 
                                foreach ($post_array as $post) {
                        ?>
                            <a href="/blogs/<?php echo $post['title_id'];; ?>">
                                <section class="listed-post">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="post-list-img" style="background-image: url(/blogs/<?php echo $post['banner']; ?>);"></div>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="post-list-content">
                                                <h3><?php echo $post['title'];; ?></h3>
                                                <p>
                                                    <?php echo substr($post['excerpt'], 0, 200); ?> ... 
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </a>
                        <?php 
                            }
                        ?>
                    </div>
                        <?php 
                            }
                        ?>



                    <?php 
                    if($title_id != '') {
                    ?>
                        <div class="article">

                            <div class="title-box">
                                <div class="row">
                                    <div class="col-md-8 heading">
                                        <h1><?php echo $post_title; ?></h1>
                                        <p>
                                            <span> <?php echo $post_date; ?></span>
                                            <span class="pull-right"> <?php //echo '- ' . $post_author; ?>  &nbsp;&nbsp;&nbsp;</span>
                                        </p>
                                    </div>
                                    <div class="col-md-4">
                                        <p>Share the page:</p>
                                        <div class="social-sharing">
                                            <!-- Facebook share button code -->
                                            <div>
                                                <div class="fb-share-button" 
                                                    data-href="<?php echo $meta_url; ?>" 
                                                    data-layout="button"
                                                    data-size="large">
                                                </div>
                                            </div>
                                            <br>
                                            <!-- Twitter share button code -->
                                            <div>
                                                <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" 
                                                    class="twitter-share-button" 
                                                    data-show-count="false"
                                                    data-size="large">
                                                        Tweet
                                                </a>
                                            </div>


                                            <!-- <button class="btn btn-default share-url">
                                                <i class="fa fa-twitter"></i>
                                            </button> -->



                                            <!-- <button class="btn btn-default">
                                                <i class="fa fa-instagram"></i>
                                            </button>
                                            <button class="btn btn-default">
                                                <i class="fa fa-whatsapp"></i>
                                            </button> -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="image-box">
                                <img src="<?php echo $post_image;?>" alt="<?php echo $post_title; ?>" class="img-responsive">
                            </div>

                            <div class="content-box">
                                <?php echo $post_content;?>
                            </div>

                        </div>
                    <?php 
                     }
                    ?>

                </section>
            </div>

            <!-- Right Sidebar -->
            <div class="col-lg-2 col-md-3 sidebar-plcholder" >
                <section>
                    <div class="popular-article-box">

                    </div>
                </section>

                <section>
                    <!-- <h3>Relevant Items</h3> -->
                    <div class="tag-cloud-box">

                    </div>
                </section>
            </div>

            <!-- Placeholder Box -->
            <div class="col-lg-2 ad-plcholder" >
                <section>

                </section>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
        <br><br>

    <div class="container-fluid">
        <div class="row">

            <!-- Placeholder Box -->
            <div class="col-md-2" >
                <section>  
                </section>
            </div>

            <!-- Bottom box -->
            <div class="col-md-8">
                
                <div class="row recent-article-box">

                </div>


            </div>


            <!-- Placeholder Box -->
            <div class="col-md-2" >
                <section>  
                </section>
            </div>


        </div>

    </div>


    <br><br><br>




    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
        setTimeout(() => {
            (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
            fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        },3000);
    </script>



    <!-- <script src="assets/js/main.js"></script> -->
    <script>
        
Promise.all([
    countView(),
    fetchPopularPosts(),
    fetchRecentPosts(),
    fetchTagCloud()
])


// Update View
function countView() {
    return new Promise((resolve, reject) => {
        <?php if($title_id) { ?>
        setTimeout(() => {
            $.post(
                '/blogs/prg/update_view.php',
                {
                    post_id: '<?php echo $title_id;?>'
                },
                function (data) {
                    // console.log(data)
                    resolve(data)
                }
            )
        }, 7000);
        <?php } 
        
        else {
            echo 'resolve()';
        }?>
    })
}


// Fetch Popular Posts
function fetchPopularPosts() {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            $.post(
                '/blogs/prg/fetch_posts.php',
                {
                    current_post_id: '<?php echo $title_id;?>',
                    filter: 'popular',
                    limit: 6
                },
                function (data) {
                    const popularPosts = parseJSON(data)
                    let popularPostsHtml = '';
                    popularPosts.filter(post => {
                        popularPostsHtml += `
                            <a href="/blogs/${post['title_id']}">
                                <div class="article">
                                    <img src="/blogs/${post['banner']}" alt="" class="img-responsive">
                                    <h3>${post['title']}</h3>
                                </div>
                            </a>`
                    })
                    $('.popular-article-box').html(popularPostsHtml);
                    resolve()
                }
            )
        }, 3000);
    })
}

// Fetch Recent Posts
function fetchRecentPosts() {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            $.post(
                '/blogs/prg/fetch_posts.php',
                {
                    current_post_id: '<?php echo $title_id;?>',
                    filter: 'recent',
                    limit: 6
                },
                function (data) {
                    const recentPosts = parseJSON(data)
                    let recentPostsHtml = '';
                    recentPosts.filter(post => {
                        recentPostsHtml += `
                            <a href="/blogs/${post['title_id']}">
                                <div class="col-md-4">
                                    <section>
                                        <div class="article">
                                            <img src="/blogs/${post['banner']}" alt="" class="img-responsive">
                                            <h3>${post['title']}</h3>
                                        </div>
                                    </section>
                                </div>
                            </a>`
                    })
                    $('.recent-article-box').html(recentPostsHtml)
                    resolve()
                }
            )
        }, 5000);
    })
}


// Fetch Tag Cloud
function fetchTagCloud() {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            $.post(
                '/blogs/prg/fetch_tagcloud.php',
                {
                    filter: 'tagcloud',
                    limit: 50
                },
                function (data) {
                    const tagCloud = parseJSON(data)

                    let tagCloudhtml = '';
                    Object.keys(tagCloud).forEach(function (tag) {
                        let size = `style="font-size: ${(1.2 * ((tagCloud[tag] / 2) + 0.5)) + .5}rem"`;  // Adjust font-size based on the count of each tags
                        tagCloudhtml += `
                            <a ${size} href="/blogs/tags/${tag}">
                                <span>${tag}</span>
                            </a>`
                    })

                    $('.tag-cloud-box').html(tagCloudhtml)
                    resolve()
                }
            )
        }, 1000);
    })
}




function parseJSON(str) {
    try {
        return JSON.parse(str);
    } catch (e) {
        return [];
    }
}



// Code for copy-to-clipboard
// let temp = '<input type="text" value="OK">';
// let url = location.href;
// $('.share-url').on('click', function() {
//     $("body").append(temp);
//     temp.val(url).select();
//     document.execCommand("copy");
//     temp.remove();
//     console.log("URL copied!");
// })

    </script>

</body>

</html>