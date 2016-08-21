<?php get_header()?>
<?php while(have_posts()): the_post();?>


    <div class="post">
        <h2 class="title"><?php the_title()?></h2>
        <div class="entry">
            <a href="<?php the_permalink();?>" class="image image-full"><?php the_post_thumbnail('full')?></a>
            <?php the_content('Read More')?>
        </div>
    </div>

<?php endwhile;?>
<?php get_footer()?>
