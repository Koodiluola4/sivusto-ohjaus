<?php

function setup_theme() {

    function locale_change($locale) {
        if (isset($_GET['lang'])) {
            if (!isset($_COOKIE['language'])) {
                setcookie('language', sanitize_key($_GET['lang']), time() + 3600, COOKIEPATH, COOKIE_DOMAIN);
                return sanitize_key($_GET['lang']);
            } else {
                if($_GET['lang'] != $_COOKIE['language'])
                {
                    setcookie('language', sanitize_key($_GET['lang']), time() + 3600, COOKIEPATH, COOKIE_DOMAIN);
                    return sanitize_key($_GET['lang']);
                } else {
                    return $_COOKIE['language'];
                }
            }
        }
        $result = isset( $_COOKIE['language'] ) ? $_COOKIE['language'] : 'en_GB';
        return $result;
    }

    add_filter( 'locale', 'locale_change' );

    load_theme_textdomain( 'mulufikir_theme', get_template_directory() . '/languages' );
}

add_action( 'after_setup_theme', 'setup_theme' );

?>