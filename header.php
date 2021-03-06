<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png" />
    <title><?php echo wp_title(); ?></title>
    <?php wp_head(); ?>
    <?php get_template_part('partials/analytics'); ?>
</head>
<?php $page_slug = 'page-'.$post->post_name; ?>
<body <?php body_class($page_slug); ?>>
<?php get_template_part('partials/header-menu'); ?>
<div class="wrapper">
<?php if( is_front_page() ) : ?>
    <div id="particles-js"></div>
    <div class="splash">
        <div class="title-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <h1>See You<br>Space Cow</h1>
                            <div class="cow-container">
                                <?php get_template_part('partials/graphic-cow-butt'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="planet-half">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/planet-half.svg" class="img-responsive planet" alt="Planet Image">
        </div>
        <div class="planet-half-overlay"></div>
    </div>
<?php else : ?>
    <div class="interior-header">
        <div id="particles-js" class="interior"></div>
        <h1>
        <?php
            if ( is_page() ) {
                echo get_field('page_header', $post->ID);
            }
            else if ( is_single() ) {
                echo the_title();
            }
            else if ( is_archive() ) {
                echo post_type_archive_title();
            }
        ?>
        </h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p id="breadcrumbs">','</p>'); } ?>
            </div>
        </div>
    </div>
<?php endif; ?>
<div class="body-content">