<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php
    wp_head();
    ?>
</head>

<body>
    <header class="p-4 navbar-light bg-light container ">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="#">Books</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navigation">
                <?php
                    wp_nav_menu(
                        array(
                            'menu' => 'primary',
                            'container' => '',
                            'theme_location' => 'primary',
                            'items_wrap' => '<ul id="" class="navbar-nav ml-auto">%3$s</ul'
                        )
                    );
                ?>
                
            </div>
        </nav>

    </header>
    <div class="sub_header container text-center">
        <h1><?php the_title(); ?></h1>
    </div>