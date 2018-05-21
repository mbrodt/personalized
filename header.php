<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo
get_stylesheet_directory_uri(); ?>/assets/css/style.css">
</head>

<body>
    <header id="header">
        <div class="container container-small mt-3">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <a href="http://itu.dk/people/mkrn/personalized/" class="col-10" id="banner"><h2>Mads Brodt</h2></a>
                        <button class="col-2" id="hamburger" onclick="toggleMobileNav()" style="background-color: transparent; border: none;">
                            <img src="<?php echo
                            get_stylesheet_directory_uri(); ?>/assets/images/hamburger.svg" alt="">   
                        </button>
                    </div>
                </div>
                <ul id="main-navigation" class="col-12 col-sm-6">
                    <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => false, 'items_wrap'    => '%3$s' ) ); ?>
                </ul>
                <div class="is-passive" id="mobile-navigation">
                    <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => false, 'items_wrap'    => '%3$s' ) ); ?>
                </div>
            </div>
        </div>
    </header>

<script>
   function toggleMobileNav(x) {
        const mobilenav = document.querySelector('#mobile-navigation');
        mobilenav.classList.toggle('is-passive');
    }
</script>