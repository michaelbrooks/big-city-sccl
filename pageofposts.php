<?php
/*
Template Name: Page Of Posts
*/

get_header(); 
?>

<div id="content">
<?php
if (is_page() ) {
$category = get_post_meta($posts[0]->ID, 'category', true);
}
if ($category) {
    $cat = get_cat_ID($category);
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $post_per_page = 4; // -1 shows all posts
    $do_not_show_stickies = 1; // 0 to show stickies
    $args=array(
        'category__in' => array($cat),
        'orderby' => 'date',
        'order' => 'DESC',
        'paged' => $paged,
        'posts_per_page' => $post_per_page,
        'caller_get_posts' => $do_not_show_stickies
    );
    $temp = $wp_query;  // assign orginal query to temp variable for later use   
    $wp_query = null;
    $wp_query = new WP_Query($args);
    if( have_posts() ) : 
		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
            <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
                <div class="entry-title">
                    <?php if (get_the_title()) : ?>
                        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(array('before' => 'Permalink to: ', 'after' => '')); ?>"><?php the_title(); ?></a></h2>
                    <?php else:?>
                        <h2><a href="<?php the_permalink() ?>" rel="nofollow">Permalink</a></h2>
                    <?php endif; ?>
                </div>
                <div class="postdata">
                    <span class="vcard">Posted by <span class="fn"><?php the_author() ?></span></span>
                    <span class="published posted_date" title="<?php the_time('Y-m-d H:i:sP') ?>">on <?php the_time('F d, Y') ?></span>
                    <!--<br/>-->
                    <!--<?php the_category(', ') ?> / -->
                    <!--<?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>-->
                </div>
                <div class="entry-content"><?php the_post_thumbnail() ?><?php the_content('Continue reading...'); ?></div>
                <?php wp_link_pages() ?>
                <?php the_tags( '<p class="tags">Tags: ', ', ', '</p>'); ?>
            </div>
        <?php endwhile; ?>
        
        <div class="navigation">
          <div class="alignleft"><?php next_posts_link('« Older Entries') ?></div>
          <div class="alignright"><?php previous_posts_link('Newer Entries »') ?></div>
        </div>
    <?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>

	<?php endif; 
	
	$wp_query = $temp;  //reset back to original query
	
}  // if ($category)
?>
</div>

<?php get_footer(); ?>