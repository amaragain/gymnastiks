<footer id="footerContact">
    <div class="container">
        <dic class="row">
            <div class="col-md-2 footer-item">
                <a href="/">
                    <img src="/assets/img/menu/logo.png" alt="Viswajit nikhath gymnastiks"
                        class="img-responsive footer-logo">
                </a>
            </div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-3 footer-item footer-contact">
                        <h4>Connect with us</h4>
                        <a href="https://wa.me/919164636350/?text=Hi,%20I%20was%20checking%20your%20website%20and%20I%20would%20like%20to%20know%20more%20about%20the%20Gymnastiks%20Training%20Program."
                            target="_blank" rel="noopener noreferrer">Whatsapp</a> <br>
                        <a href="https://www.facebook.com/ViswajitNikhathGymnastiks" target="_blank"
                            rel="noopener noreferrer">Facebook</a> <br>
                        <a href="https://www.instagram.com/explore/tags/viswajitnikhathgymnastiks/" target="_blank"
                            rel="noopener noreferrer">Instagram</a> <br>
                        <a href='whatsapp://send?text=The%20best%20place%20to%20learn%20competitive%20and%20recreational%20gymnastics%20in%20Bengaluru%20https://www.viswajitnikhathgymnastiks.in'
                            target="_blank" rel="noopener noreferrer">Share</a>
                    </div>
                    <div class="col-md-5 footer-item">
                        <h4>Talk to us</h4>
                        <p>
                            <b>Phone : </b> <a href="tel:+917892104993">+91 78921 04993</a>
                        </p>
                        <p>
                            <b>Email : </b> <a
                                href="mailto:info@viswajitnikhathgymnastiks.in?subject=Gymnastics%20Class%20Enquiry">info@viswajitnikhathgymnastiks.in</a>
                        </p>
                        <p>
                            <b>Direction : </b> <a href="https://g.page/ViswajitNikhathGymnastiks?share" target="_blank"
                                rel="noopener noreferrer"> <i class="fa fa-sm fa-map-marker"></i>
                                Click to view in Google Map</a>
                        </p>
                        <p>
                            <b>Address : </b> <br> <a href="https://g.page/ViswajitNikhathGymnastiks?share"
                                target="_blank" rel="noopener noreferrer">ITPL Main Road, Next to Smart Works,
                                <br>Silver Springs Layout Junction, <br>Bengaluru, Karnataka 560037</a>
                        </p>
                    </div>
                    <div class="col-md-4 footer-item">
                        <h4>More Info</h4>
                        <p> </p>
                    </div>
                </div>
            </div>
    </div>
    </div>

    <div class="contact-btn-placeholer"></div>

    <div id="stickyContactButtons" class="sticky-contact-btn">
        <a class="contact-event-btn call-us" href="tel:<?php echo $vng_phone;?>" rel="noopener noreferrer"
            data-event="call">
            <img src="/assets/img/telephone-themed.png" alt="Call">
            <span>Call Us</span>
        </a>
        <a class="contact-event-btn reach-us" href="/direction" rel="noopener noreferrer" data-event="direction">
            <img src="/assets/img/map-themed.png" alt="Location">
            <span>Location</span>
        </a>
        <a class="contact-event-btn whatsapp-us"
            href='https://wa.me/<?php echo $vng_whatsapp_number;?>/?text=<?php echo $vng_whatsapp_msg['enquiry'];?>'
            target="_blank" rel="noopener noreferrer" data-event="whatsapp">
            <img class="" src="/assets/img/whatsapp-themed.png" alt="Whatsapp">
            <span>Whatsapp</span>
        </a>
    </div>

</footer>



<?php
  // Analytics should run only in production
  // Pass "dev_test" as a queryparam to test in production, so that analytics won't run
  if( ( $_SERVER['SERVER_NAME'] == 'www.viswajitnikhathgymnastiks.in' ||  $_SERVER['SERVER_NAME'] == 'viswajitnikhathgymnastiks.in' ) && !(strpos($_SERVER['QUERY_STRING'], 'dev_test') > -1) )
  {
?>

    <script type="text/javascript">
        (function(c, l, a, r, i, t, y) {
            c[a] = c[a] || function() {
                (c[a].q = c[a].q || []).push(arguments)
            };
            t = l.createElement(r);
            t.async = 1;
            t.src = "https://www.clarity.ms/tag/" + i;
            y = l.getElementsByTagName(r)[0];
            y.parentNode.insertBefore(t, y);
        })(window, document, "clarity", "script", "81f1moahhq");
    </script>
    <!-- Hotjar Tracking Code for https://www.viswajitnikhathgymnastiks.in -->
    <script>
        (function(h, o, t, j, a, r) {
            h.hj = h.hj || function() {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
            h._hjSettings = {
                hjid: 1639773,
                hjsv: 6
            };
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script');
            r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>


    <script>
        window.addEventListener('load', function() {
            jQuery('a:contains("Enquiry")').click(function() {
                gtag('event', 'conversion', {
                    'send_to': 'AW-675854219/V1CTCOKOy-8CEIvvosIC'
                });
            })
            jQuery('a:contains("Whatsapp")').click(function() {
                gtag('event', 'conversion', {
                    'send_to': 'AW-675854219/qX7YCMCA9u8CEIvvosIC'
                });
            })
            jQuery('a:contains("Facebook")').click(function() {
                gtag('event', 'conversion', {
                    'send_to': 'AW-675854219/d-uZCO7B8-8CEIvvosIC'
                });
            })
            jQuery('a:contains("Instagram")').click(function() {
                gtag('event', 'conversion', {
                    'send_to': 'AW-675854219/NlcCCISG9u8CEIvvosIC'
                });
            })
            jQuery('a:contains("Share")').click(function() {
                gtag('event', 'conversion', {
                    'send_to': 'AW-675854219/dC7YCPbD8-8CEIvvosIC'
                });
            })
            jQuery('a:contains("Click to view in Google Map")').click(function() {
                gtag('event', 'conversion', {
                    'send_to': 'AW-675854219/uIoXCLXt8u8CEIvvosIC'
                });
            })
            jQuery('a:contains("info@viswajitnikhathgymnastiks.in")').click(function() {
                gtag('event', 'conversion', {
                    'send_to': 'AW-675854219/z0MpCIDo8u8CEIvvosIC'
                });
            })
            jQuery('a img[src*="/assets/img/whatsapp-themed.png"]').click(function() {
                gtag('event', 'conversion', {
                    'send_to': 'AW-675854219/Hp5hCIz_9e8CEIvvosIC'
                });
            })
            jQuery('a img[src*="/assets/img/map-themed.png"]').click(function() {
                gtag('event', 'conversion', {
                    'send_to': 'AW-675854219/Ns_NCIG68-8CEIvvosIC'
                });
            })
            jQuery('a img[src*="/assets/img/telephone-themed.png"]').click(function() {
                gtag('event', 'conversion', {
                    'send_to': 'AW-675854219/lsAhCL268-8CEIvvosIC'
                });
            })
        });
    </script>


<?php
  }
?>