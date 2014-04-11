<?php get_header(); ?>
<?php if (is_front_page()): ?>
    <div id="content" class="with-sidebar">
<?php else: ?>
    <div id="content">
<?php endif; ?>
        <div <?php post_class()?>>
            <?php if (have_posts()) : ?>
        	<?php while (have_posts()) : the_post(); ?>
                <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
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
