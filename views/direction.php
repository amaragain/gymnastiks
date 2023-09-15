<!DOCTYPE html>
<html lang="en">

<head>

    <?php $page = 'direction';?>

    <?php include('header.php');?>

    <?php include('analytics.php');	?>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/main.css">

    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <?php  include('chunks/program_data.php'); ?>  

    <script>
    let map;

    function initMap() {
        // The location of vng
        const vng = {
            lat: 12.95562950864588,
            lng: 77.71531212902633
        };
        const center = {
            lat: 12.95613471287159,
            lng: 77.71218085673748
        }
        map = new google.maps.Map(document.getElementById("map"), {
            center: vng,
            zoom: 13,
            mapTypeId: 'roadmap',
            gestureHandling: "greedy",
            fullscreenControl: true
        });

        const contentString =
            `
                <div id="mapContent">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-2">
                                <img src="/assets/img/menu/logo.png" class="img-responsive">
                            </div>
                            <div class="col-md-10">
                                <h1 id="firstHeading" class="firstHeading">
                                    Viswajit Nikhath Gymnastiks
                                </h1>
                                <p>
                                    <a href="https://g.page/ViswajitNikhathGymnastiks?share"
                                        target="_blank" rel="noopener noreferrer">
                                        ITPL Main Road, Next to Smart Works, <br>
                                        Silver Springs Layout Junction, <br>
                                        Bengaluru, Karnataka 560037
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                `;

        const infowindow = new google.maps.InfoWindow({
            content: contentString,
        });

        // The marker, positioned at vng
        const marker = new google.maps.Marker({
            position: vng,
            map: map,
        });
        // Open Info on marker click
        marker.addListener("click", () => {
            infowindow.open({
                anchor: marker,
                map,
                shouldFocus: false,
            });
        });
        // Open Info OnLoad
        infowindow.open({
            anchor: marker,
            map,
            shouldFocus: false,
        });
        // Close info on map-click
        google.maps.event.addListener(map, "click", function(event) {
            infowindow.close();
        });

    }
    </script>



</head>

<body>

    <?php include('menu.php');?>

    <section class="map-section">
        <div id="map"></div>
        <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
        <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDN1q49ZhblPydFCUyOfGWfGEJSEFytg-M&callback=initMap"
            async></script>
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


</body>

</html>