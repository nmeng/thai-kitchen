<?php
/*
Template Name: Menu Page
*/
?>

<?php 
include('header.php');
?>
<script src="<?php bloginfo('template_directory'); ?>/js/notindex.js"></script>
    <script>
      $(document).ready(function (){
        main();
        if($( window ).width() > 731){
        $("#menu-expanded").toggle();}
        });
      $('a[href^="#"]').on('click',function (e) {
            e.preventDefault();
            var target = this.hash,
            $target = $(target);

        if($( window ).width() > 731){

            $('html, body').stop().animate({'scrollTop': $target.offset().top}, 500, 'swing', function () {
                window.location.hash = target;
            });
        }else{
            $("#menu-expanded").toggle();

            $('html, body').stop().scrollTop($target.offset().top-165);
        }
    });
    </script>

<div id="content"> 
    <div id="content-formatted">
        <?php
        $args = array( 'category' => 2, 'posts_per_page'  => 20 );
        $lastposts = get_posts( $args );
        foreach ( $lastposts as $post ) :
        setup_postdata( $post ); 
        ?>
        <?php the_content(); ?>
        <?php endforeach; wp_reset_postdata(); ?>
    </div>

<?php 
include('footer.php');
?>