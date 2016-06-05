<!DOCTYPE html>

<head>
	<?php include("head.php"); ?>
</head>

<body>
	<div id="fouc">
		<?php include("nav.php"); ?>

        <div class="site-wrap">
			<?php include("header.php"); ?>

            <div class="page-content contact">
                <img class="banner-image" src="/images/contact-s.jpg" srcset="/images/contact-m.jpg 640w, /images/contact-l.jpg 1200w" alt="Two photographers lying on train track"/>
                <div class="rest-of-page">

                    <div class="text-block white">
                        <div class="content">
                            <h1>Contact</h1>
                            <h3>If you'd like to discuss a job or simply have an informal chat, we're a shutter click away.</h3>
                        </div>
                    </div>

                    <div class="contact-details">
                        <ul>
                            <li>
                                <ul>
                                    <li>Twitter</li>
                                    <li>Facebook</li>
                                    <li>Instagram</li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li>Twitter</li>
                                    <li>Facebook</li>
                                    <li>Instagram</li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li>Twitter</li>
                                    <li>Facebook</li>
                                    <li>Instagram</li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div id="map">
                    </div>

                    <form class="contact-form" method="post" name="contactForm">
                        <div class="container">
                            <input id="name" name="name" required placeholder="Name" type="text"/>
                            <input id="email" name="email" required placeholder="E-mail" type="email"/>
                            <input name="subject" value=" has sent a new message" type="hidden"/>
                            <textarea id="message" name="message" required rows="3" placeholder="Message"></textarea>
                            <input type="submit" value="Send"/>
                        </div>
                    </form>



                </div>
            </div>

            <?php include("footer.php"); ?>
		</div>
	</div>

    <?php include("back-to-top.php"); ?>
    <?php include("javascript-files.php"); ?>
    <script>
    /* create google map */
        function initMap() {
            var mapDiv = document.getElementById('map');
            var map = new google.maps.Map(mapDiv, {
                center: {lat: 51.5013411, lng: -0.1167108},
                zoom: 13,
                disableDefaultUI: true
            });
            map.set('styles',
                   [
                      {
                        "featureType": "road.highway",
                        "stylers": [
                          { "color": "#CCCC9F" }
                        ]
                      },{
                          "featureType": "water",
                            "stylers": [
                              { "color": "#9FB4CC" }
                            ]
                      }
                    ]
            );
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer></script>

</body>
