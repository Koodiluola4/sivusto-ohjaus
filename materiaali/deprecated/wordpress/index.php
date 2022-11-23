<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/app.js" type="text/javascript"></script>
    <title>MULUFIKIR</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="header-logo">
                <p class="header-text color-white">MULUFIKIR</p>
                <p class="color-white header-subtext">Sharing is Caring</p>
                <div class="navbar">
                    <a class="active" href="index.php"><?php _e( 'Main', 'mulufikir_theme' ); ?></a>
                    <a class="non-active padding-navbar-item" href="#Lisätietoa"><?php _e( 'Info', 'mulufikir_theme' ); ?></a>
                    <a class="non-active padding-navbar-item" href="#Yhteystiedot"><?php _e( 'Contact', 'mulufikir_theme' ); ?></a>
                    <a class="non-active padding-navbar-item" href="#Lahjoita"><?php _e( 'Donate', 'mulufikir_theme' ); ?></a>
                </div>
            </div>
            <div class="language-header">
                <button onclick="change_language(this.id)" id="English"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/gb.svg" width="128" height="64"></button>
                <button onclick="change_language(this.id)" id="Etopia"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/et.svg" width="128" height="64"></button>
            </div>
        </div>
        <img src="<?php echo get_bloginfo('template_directory'); ?>/images/MuluAndEtaferawCropped.jpg" alt="Italian Trulli" class="imgbanner">
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
</body>
</html>