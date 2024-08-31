<?php get_header(); ?>

<main>
<div class="bradcrums">
    <p><a href="<?php echo site_url();?>"></a></p>
    <p><Home>
    <a href="<?php  the_title();?>"></a></p>
</div>
<?php the_post_thumbnail('large')?>
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_title('<h3>', '</h3>');
            the_content();
        endwhile;
    else :
        echo '<p>No content found</p>';
    endif;
    ?>
</main>

<?php get_footer(); ?>
