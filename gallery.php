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

                        <p>A selection of our finest work.</p>
                    </div>
                    <div class="gallery-container">
                        <div class="masonry-block">
                            <div class="grid-sizer"></div>
                            <div class="gutter-sizer"></div>

                            <a class="fancybox" href="/images/rings-l.jpg">
                                <img class="grid-item" src="/images/rings-s.jpg" srcset="/images/rings-m.jpg 640w, /images/rings-l.jpg 1200w" alt="Ring on hand"/>
                            </a>
                            <a class="fancybox" href="/images/ribbon-l.jpg">
                                <img class="grid-item" src="/images/ribbon-s.jpg" srcset="/images/ribbon-m.jpg 640w, /images/ribbon-l.jpg 1200w" alt="Ribbon on chair"/>
                            </a>
                            <a class="fancybox" href="/images/flowers-l.jpg">
                                <img class="grid-item" src="/images/flowers-s.jpg" srcset="/images/flowers-m.jpg 640w, /images/flowers-l.jpg 1200w" alt="Flowers"/>
                            </a>
                            <a class="fancybox" href="/images/groom-l.jpg">
                                <img class="grid-item" src="/images/groom-s.jpg" srcset="/images/groom-m.jpg 640w, /images/groom-l.jpg 1200w" alt="Groom with flower"/>
                            </a>
                            <a class="fancybox" href="/images/kiss-l.jpg">
                                <img class="grid-item" src="/images/kiss-s.jpg" srcset="/images/kiss-m.jpg 640w, /images/kiss-l.jpg 1200w" alt="Kiss"/>
                            </a>
                            <a class="fancybox" href="/images/car-l.jpg">
                                <img class="grid-item" src="/images/car-s.jpg" srcset="/images/car-m.jpg 640w, /images/car-l.jpg 1200w" alt="Couple in car"/>
                            </a>
                            <a class="fancybox" href="/images/confetti-l.jpg">
                                <img class="grid-item" src="/images/confetti-s.jpg" srcset="/images/confetti-m.jpg 640w, /images/confetti-l.jpg 1200w" alt="Couple getting covered in confetti"/>
                            </a>
                        </div>

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
