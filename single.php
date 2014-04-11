<?php get_header(); ?>
    <div id="content">
        <?php if (have_posts()) : ?>
        	<?php while (have_posts()) : the_post(); ?>
        		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
        		    <div class="entry-title">
                    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute( array('before' => 'Permalink to: ', 'after' => '')); ?>"><?php the_title(); ?></a></h2>
                    </div>
                    <div class="postdata">
                        <span class="vcard">Posted by <span class="fn"><?php the_author() ?></span></span>
                        <span class="published posted_date" title="<?php the_time('Y-m-d H:i:sP') ?>">on <?php the_time('F d, Y') ?></span>
                        <!--<br/>
                        <?php the_category(', ') ?>-->
                    </div>
                    <div class="entry-content"><?php the_post_thumbnail() ?><?php the_content('Continue reading...'); ?></div>
<?php wp_link_pages() ?>
                    <?php the_tags( '<p class="tags">Tags: ', ', ', '</p>'); ?>
        		</div>
                <?php comments_template(); ?>
        	<?php endwhile; ?>
    	<?php else : ?>
    		<h2>Not Found</h2>
    		<p>Sorry, but you are looking for something that isn't here.</p>
    	<?php endif; ?>
    </div>
<?php get_footer(); ?>
