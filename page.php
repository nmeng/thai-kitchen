
<?php 
include('header.php');
?>
<script src="<?php bloginfo('template_directory'); ?>/js/notindex.js"></script>
    <script>
      $(document).ready(function (){
        $("#content").css("margin-top","170px");
        $("#content-formatted").css("padding","20px");
        main();
        });
    </script>

<div id="content"> 
    <div id="content-formatted">
        <?php the_post(); ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="entry-content">
                <?php the_content(); ?>
                <?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'hbd-theme' ) . '&after=</div>') ?>
            </div><!-- .entry-utility -->      
        </div>

<?php 
include('footer.php');
?>