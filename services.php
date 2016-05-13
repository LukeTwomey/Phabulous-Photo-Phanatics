<!DOCTYPE html>

<head>
	<?php include("head.php"); ?>
</head>

<body>
	<div id="fouc">
		<?php include("nav.php"); ?>

        <div class="site-wrap">
			<?php include("header.php"); ?>

            <div class="page-content services">
                <img class="banner-image" src="/images/services-s.jpg" srcset="/images/services-m.jpg 640w, /images/services-l.jpg 1200w" alt="Close crop of a camera"/>
                <div class="rest-of-page">
                    <div class="text-block white">
                        <h1>Services</h1>
                        <h3>Phabulous Photo Phanatics provide our customers with professional, quality photography services</h3>
                        <p>Our expert photographers will consult with you closely, to ensure the work undertaken meets your exacting standards.</p>
                    </div>
                    <div class="image-block">
                        <a href="weddings.php">
                            <img src="/images/services-wedding-s.jpg" srcset="/images/services-wedding-m.jpg 640w, /images/services-wedding-l.jpg 1200w" alt="Married Couple"/>
                        </a>
                    </div>
                    <div class="text-block white">
                        <a href="weddings.php"><h2>Weddings</h2></a>
                        <p>We know how important your special day is. Leave everything to us and relax, safe in the knolwedge that the experts have it all under control.</p>
                        <a href="weddings.php" class="button">Find Out More</a>
                    </div>
                </div>
            </div>

            <?php include("footer.php"); ?>
		</div>
	</div>

    <?php include("back-to-top.php"); ?>
    <?php include("javascript-files.php"); ?>

</body>
