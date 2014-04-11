<div id="sidebar">
    <?php if (!dynamic_sidebar("Widgets") ) : ?>
    	<div class="box">
            <h3>Search</h3>
    	    <?php get_search_form() ?><img src="<?php echo get_template_directory_uri() ?>/images/spacer.gif" alt="WP_Big_City" />
    	</div>
        <div class="categories box">
            <ul>
                <?php wp_list_categories(array('title_li'=>__('<h3>Category:</h3>'))); ?>
            </ul>
        </div>
        <div class="box">
            <h3>Archives</h3>
            <ul>
                <?php wp_get_archives('type=monthly'); ?>
            </ul>
        </div>
        <div class="box">
	    <?php wp_list_bookmarks(array('title_before'=>'<h3>', 'title_after'=>'</h3>', 'category_before'=>'', 'category_after'=>'')); ?>
        </div>
    <?php endif; ?>
</div>