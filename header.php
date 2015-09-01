<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
    <title><?php
        if ( is_single() ) { single_post_title(); }
        elseif ( is_home() || is_front_page() ) { bloginfo('name'); print ' | '; bloginfo('description'); get_page_number(); }
        elseif ( is_page() ) { single_post_title(''); }
        elseif ( is_search() ) { bloginfo('name'); print ' | Search results for ' . wp_specialchars($s); get_page_number(); }
        elseif ( is_404() ) { bloginfo('name'); print ' | Not Found'; }
        else { bloginfo('name'); wp_title('|'); get_page_number(); }
    ?></title>
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/styles/reset.css" media="screen" />
    <link rel='stylesheet' media='only screen and (min-width: 731px)' href='<?php bloginfo('template_directory'); ?>/style.css' />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/styles/small.css" media='only screen and (max-width: 730px)'/>
    <script src="<?php bloginfo('template_directory'); ?>/js/scripts.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

    <?php wp_head(); ?>
</head>
<body>
    <main>
        <aside>
            <?php
            $sticky = get_option( 'sticky_posts' );
            $query = new WP_Query( 'p=' . $sticky[0] );
            ?>
            <?php while ( $query->have_posts() ) : $query->the_post() ?>

            <?php /* Create a div with a unique ID thanks to the_ID() and semantic classes with post_class() */ ?>             
            <?php /* The entry content */ ?>
            <?php the_content( __( '', 'hbd-theme' )  ); ?>
            
            <?php /* Close up the post div and then end the loop with endwhile */ ?>      
            <?php endwhile; ?> 
 </aside>