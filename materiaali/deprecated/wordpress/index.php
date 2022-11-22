<?php

function mytheme_localisation(){

    /*
    function mytheme_localised( $locale ) {
        if ( isset( $_GET['l'] ) ) {
            return sanitize_key( $_GET['l'] );
        }
        return $locale;
    }
    */

    function locale_sel($l) { return "en_GB"; }

    add_filter( 'locale', 'locale_sel' );

    load_theme_textdomain( 'mytheme', get_template_directory() . '/languages' );
}

add_action( 'after_setup_theme', 'mytheme_localisation' );

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
    <title>MULUFIKIR</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="header-logo">
                <p class="header-text color-white">MULUFIKIR</p>
                <p class="color-white header-subtext">Sharing is Caring</p>
                <div class="navbar">
                    <a class="active" href="index.php"><?php __( 'Test', 'mytheme' ); ?></a>
                    <a class="non-active padding-navbar-item" href="#Lisätietoa"><?php __( 'info_page', 'mytheme' ); ?></a>
                    <a class="non-active padding-navbar-item" href="#Yhteystiedot"><?php __( 'contact_page', 'mytheme' ); ?></a>
                    <a class="non-active padding-navbar-item" href="#Lahjoita"><?php __( 'donate_page', 'mytheme' ); ?></a>
                </div>
            </div>
            <div class="language-header">
                <button><img src="<?php echo get_bloginfo('template_directory'); ?>/images/gb.svg"></button>
                <button><img src="<?php echo get_bloginfo('template_directory'); ?>/images/et.svg"></button>
            </div>
        </div>
        <!--<img src="<?php/* echo get_bloginfo('template_directory'); */?>/images/MuluAndEtaferawCropped.jpg" alt="Italian Trulli" class="imgbanner">-->
        <div class="slideshow-container">
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                    <img src="images/FrontOfTheMuluFikirCropped.JPG" style="width:100%">
                <div class="text">Caption Text</div>
            </div>
          
            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="images/LastDayOfDayCareCopped.jpg" style="width:100%">
                <div class="text">Caption Two</div>
            </div>
          
            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="images/MuluAndEtaferawCropped.jpg" style="width:100%">
                <div class="text">Caption Three</div>
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <div class="content">
            <div class="post">
                <h2>Tarina</h2>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sodales sem eget ornare luctus. Mauris semper rhoncus tortor, eu mollis nisl semper non. Morbi maximus diam quam. Fusce egestas et ex a gravida. Fusce fringilla diam nec mauris eleifend vulputate. Praesent scelerisque lacus sit amet nisl laoreet, vel feugiat leo congue. Sed egestas auctor turpis, hendrerit gravida eros aliquam in. Maecenas libero urna, viverra eget rutrum et, finibus ac eros.
                    Praesent vel pulvinar risus. Quisque eget lectus quis odio molestie commodo eu a leo. Sed mi erat, consequat nec gravida sed, facilisis sed neque. Phasellus auctor id ligula at consequat. Nullam dignissim purus a neque eleifend dignissim. Nunc aliquet dapibus nibh, ac hendrerit mauris laoreet id. Suspendisse ut facilisis metus, semper dictum enim. Praesent finibus ex sed ex finibus, quis dapibus nunc vulputate. In hac habitasse platea dictumst. Maecenas in efficitur nisl. Aenean varius neque ac venenatis scelerisque. Proin id congue felis. Morbi a quam rutrum, vestibulum neque vitae, iaculis risus. Integer volutpat risus eu sem tempor tempor at eu nisi. Donec cursus efficitur orci at tempor. </p>
            </div>
            <br>
            <div class="post">
                <h2>Tarina</h2>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sodales sem eget ornare luctus. Mauris semper rhoncus tortor, eu mollis nisl semper non. Morbi maximus diam quam. Fusce egestas et ex a gravida. Fusce fringilla diam nec mauris eleifend vulputate. Praesent scelerisque lacus sit amet nisl laoreet, vel feugiat leo congue. Sed egestas auctor turpis, hendrerit gravida eros aliquam in. Maecenas libero urna, viverra eget rutrum et, finibus ac eros.
                    Praesent vel pulvinar risus. Quisque eget lectus quis odio molestie commodo eu a leo. Sed mi erat, consequat nec gravida sed, facilisis sed neque. Phasellus auctor id ligula at consequat. Nullam dignissim purus a neque eleifend dignissim. Nunc aliquet dapibus nibh, ac hendrerit mauris laoreet id. Suspendisse ut facilisis metus, semper dictum enim. Praesent finibus ex sed ex finibus, quis dapibus nunc vulputate. In hac habitasse platea dictumst. Maecenas in efficitur nisl. Aenean varius neque ac venenatis scelerisque. Proin id congue felis. Morbi a quam rutrum, vestibulum neque vitae, iaculis risus. Integer volutpat risus eu sem tempor tempor at eu nisi. Donec cursus efficitur orci at tempor. </p>
            </div>
            <br>
            <div class="post">
                <h2>Tarina</h2>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sodales sem eget ornare luctus. Mauris semper rhoncus tortor, eu mollis nisl semper non. Morbi maximus diam quam. Fusce egestas et ex a gravida. Fusce fringilla diam nec mauris eleifend vulputate. Praesent scelerisque lacus sit amet nisl laoreet, vel feugiat leo congue. Sed egestas auctor turpis, hendrerit gravida eros aliquam in. Maecenas libero urna, viverra eget rutrum et, finibus ac eros.
                    Praesent vel pulvinar risus. Quisque eget lectus quis odio molestie commodo eu a leo. Sed mi erat, consequat nec gravida sed, facilisis sed neque. Phasellus auctor id ligula at consequat. Nullam dignissim purus a neque eleifend dignissim. Nunc aliquet dapibus nibh, ac hendrerit mauris laoreet id. Suspendisse ut facilisis metus, semper dictum enim. Praesent finibus ex sed ex finibus, quis dapibus nunc vulputate. In hac habitasse platea dictumst. Maecenas in efficitur nisl. Aenean varius neque ac venenatis scelerisque. Proin id congue felis. Morbi a quam rutrum, vestibulum neque vitae, iaculis risus. Integer volutpat risus eu sem tempor tempor at eu nisi. Donec cursus efficitur orci at tempor. </p>
            </div>
            <br>
        </div>
        <div class="footer">
            <img class="logo" src="<?php echo get_bloginfo('template_directory'); ?>/images/logo.svg" width="128" height="128" alt="Logo">
            <div class="navbar">
                <a class="non-active" href="index.html">Etusivu</a>
                <a class="non-active" href="#Lisätietoa">Lisätietoa</a>
                <a class="non-active" href="#Yhteystiedot">Yhteystiedot</a>
                <a class="non-active" href="#Lahjoita">Lahjoita</a>
            </div>
        </div>
    </div>
    <script>
        //Pistä externaaliks

        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}
            slides[slideIndex-1].style.display = "block";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
        } 
    </script>
</body>
</html>