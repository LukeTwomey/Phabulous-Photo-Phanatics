<!DOCTYPE html>

<head>
	<?php include("head.php"); ?>
</head>

<body>
	<div id="fouc">
		<?php include("nav.php"); ?>

        <div class="site-wrap">
			<?php include("header.php"); ?>

            <div class="page-content index">
                <img src="/images/holding-camera-s.jpg" srcset="/images/holding-camera-m.jpg 640w, /images/holding-camera-l.jpg 1200w" alt="Man holding camera" />

                <div class="fashion tile">
                    <a href="fashion.php"></a>
                    <div class="shadow-layer"></div>
                    <img src="/images/brick-wall-s.jpg" srcset="/images/brick-wall-m.jpg 640w, /images/brick-wall-l.jpg 1200w" alt="Model posing in front of brick wall"/>
                    <h2>Fashion</h2>
                </div>

                <div class="weddings tile">
                    <a href="weddings.php"></a>
                    <div class="shadow-layer"></div>
                    <img src="/images/wedding-dress-s.jpg" srcset="/images/wedding-dress-m.jpg 640w, /images/wedding-dress-l.jpg 1200w" alt="Wedding dress"/>
                    <h2>Weddings</h2>
                </div>

                <div class="portrait tile">
                    <a href="portrait.php"></a>
                    <div class="shadow-layer"></div>
                    <img src="/images/portrait-s.jpg" srcset="/images/portrait-m.jpg 640w, /images/portrait-l.jpg 1200w" alt="Man posing for portrait photo"/>
                    <h2>Portrait</h2>
                </div>

                <div class="street tile">
                    <a href="street.php"></a>
                    <div class="shadow-layer"></div>
                    <img src="/images/street-s.jpg" srcset="/images/street-m.jpg 640w, /images/street-l.jpg 1200w" alt="Motion blurred taxis in New York"/>
                    <h2>Street</h2>
                </div>


            </div>

            <?php include("footer.php"); ?>
		</div>
	</div>


    <?php include("javascript-files.php"); ?>

</body>
