<!DOCTYPE html>

<head>
	<?php include("head.php"); ?>
</head>

<body>
	<div id="fouc">
		<?php include("nav.php"); ?>

        <div class="site-wrap">
			<?php include("header.php"); ?>

            <div class="page-content gallery">
                <img class="banner-image" src="/images/gallery-s.jpg" srcset="/images/gallery-m.jpg 640w, /images/gallery-l.jpg 1200w" alt="Man holding camera outside"/>
                <div class="rest-of-page">
                    <div class="text-block white">
                        <h1>Gallery</h1>
                        <p>A selection of our best work.</p>
                    </div>
                </div>
            </div>

            <?php include("footer.php"); ?>
		</div>
	</div>

    <?php include("back-to-top.php"); ?>
    <?php include("javascript-files.php"); ?>

</body>
