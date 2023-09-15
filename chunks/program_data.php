<?php
    $programs = [
        'recreational' => [
            'title' => 'Recreational Gymnastics',
            'description' => '',
            'excerpt' => 'Recreational programs are offered for age-group of 4 - 16.',
            'img' => 'recreational-gymnastics-bangalore-viswajit-nikhath-gymnastiks-350x233.jpg',
            'status' => 'active',
            'url' => '/programs/recreational-gymnastics'
        ],
        'precompetitive' => [
            'title' => 'Pre-Competitive Gymnastics',
            'description' => '',
            'excerpt' => 'Pre-competitive gymnastics helps develop and prepare gymnasts for the rigors of their competitive team.',
            'img' => 'precompetitive-gymnastics-bangalore-viswajit-nikhath-gymnastiks-350x233.jpg',
            'status' => 'active',
            'url' => 'https://wa.me/919164636350/?text=Hi,%20I%20was%20checking%20your%20website%20and%20I%20would%20like%20to%20know%20more%20about%20the%20PreCompetitive%20Gymnastics%20program.'
        ],
        'competitive' => [
            'title' => 'Competitive Gymnastics',
            'description' => '',
            'excerpt' => 'The benefits earned from participation in competitive and pre-competitive gymnastics can last a lifetime!',
            'img' => 'competitive-gymnastics-bangalore-viswajit-nikhath-gymnastiks-350x233.jpg',
            'status' => 'active',
            'url' => 'https://wa.me/919164636350/?text=Hi,%20I%20was%20checking%20your%20website%20and%20I%20would%20like%20to%20know%20more%20about%20the%20Competitive%20Gymnastics%20program.'
        ],
        'adult' => [
            'title' => 'Adult Gymnastics',
            'description' => '',
            'excerpt' => 'We offer programs for adults of age 17 to 60 years.',
            'img' => 'adult-gymnastics-bangalore-viswajit-nikhath-gymnastiks-350x233.jpg',
            'status' => 'active',
            'url' => '/programs/adult-gymnastics'
        ],
        'toddler' => [
            'title' => 'Gymnastics for Toddlers',
            'description' => '',
            'excerpt' => 'We have toddlers gymnastics classes for your kids.',
            'img' => 'toddler-gymnastics-bangalore-viswajit-nikhath-gymnastiks-355x237.jpg',
            'status' => 'active',
            'url' => '/programs/toddler-gymnastics'
        ],
        'adhd' => [
            'title' => 'Gymnastics for Children with ADHD',
            'description' => '',
            'excerpt' => 'Recreational programs are offered for age-group of 4 - 16.',
            'img' => 'gymnastics-for-adhd-kids-bangalore-viswajit-nikhath-gymnastiks-350x233.jpg',
            'status' => 'active',
            'url' => '/programs/adhd-kids-gymnastics'
        ]
    ];

// echo '<pre>';
// print_r($programs);
// echo '</pre>';

function show_programs ($program_keys = []) {

    global $programs;

    if($program_keys == []) $program_keys = array_keys( $programs );
    
?>

        <div class="row text-center card-menu grid">
        <?php 
            for($i = 0; $i < count($program_keys); $i++) {

                $program_item = $programs[$program_keys[$i]];
            ?>
                <div class="col-sm-4 grid-item">
                    <div class="thumbnail">
                        <!-- <img src="paris.jpg" alt="Paris" width="400" height="300"> -->
                        <img onclick="javascript:location.href='<?php echo $program_item['url'];?>'" src="/assets/img/banner/<?php echo $program_item['img'];?>" alt="Viswajit Nikhath Gymnastiks" class="img-responsive" style="aspect-ratio: 350/233;">
                        <h3 onclick="javascript:location.href='<?php echo $program_item['url'];?>'"><strong><?php echo $program_item['title'];?></strong></h3>
                        <p onclick="javascript:location.href='<?php echo $program_item['url'];?>'"><?php echo $program_item['excerpt'];?></p>
                        <?php if($program_item['url']) { ?>
                        <a href="<?php echo $program_item['url'];?>" class="btn btn-light">More Details <i class="fas fa-angle-double-right"></i></a>
                        <?php } ?>
                        <!-- <a href="<?php echo $program_item['url'];?>" class="btn btn-light">Join Now</a> -->
                        <a class="btn btn-light" target="_blank" rel="noopener noreferrer"
                            data-event="whatsapp-recreational-gymnast"
                            href='https://wa.me/919164636350/?text=Hi,%20I%20was%20checking%20your%20website%20and%20I%20would%20like%20to%20know%20more%20about%20the%20"<?php echo rawurlencode($program_item['title']);?>"%20program.'>
                            Enquiry <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
            <?php
            }
        ?>
        </div>

        <script>
            setTimeout(() => {
                // Masonry Layout Settings
                var elem = document.querySelector('.grid');
                var msnry = new Masonry(elem, {
                    // options
                    itemSelector: '.grid-item',
                });

            }, 500);
        </script>

<?php 
}
?>
