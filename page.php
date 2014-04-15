<?php get_header(); ?>
<?php if (is_front_page()): ?>
    <div id="content" class="with-sidebar">
<?php else: ?>
    <div id="content">
<?php endif; ?>
        <div <?php post_class()?>>
            
            <?php if(function_exists('bcn_display') && $post->post_parent) { ?>
            <div class="breadcrumbs">
                <?php bcn_display(); ?>
            </div>
            <?php }?>

            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                
                <?php if ( is_user_logged_in() ) { ?>
                    <div class="postdata" title="Only shows when logged in">
                        <span class="vcard">Last updated by <span class="fn"><?php the_modified_author() ?></span></span>
                        <span class="published posted_date" title="<?php the_time('Y-m-d H:i:sP') ?>">on <?php the_modified_time('F d, Y') ?></span>
                        <?php edit_post_link('Edit'); ?>
                    </div>
                <?php } ?>
                
                <div class="entry-content"><?php the_content('Continue reading...'); ?></div>
            <?php endwhile; ?>
        <?php comments_template(); ?>
        <?php else : ?>
            <h2>Not Found</h2>
            <p>Sorry, but you are looking for something that isn't here.</p>
        <?php endif; ?>
        </div>
    </div>
    <?php if (is_front_page()): ?>
        <?php get_sidebar(); ?>
    <?php endif; ?>
<?php get_footer(); ?>
