<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) die ('Please do not load this page directly. Thanks!');
	if (post_password_required()) {
        ?>

        <h4 class="nocomments">This post is password protected. Enter the password to view comments.</h4>

        <?php
        return;
            }
	/* This variable is for alternating comment background */
	$oddcomment = 'class="alt" ';
?>



<!-- You can start editing here. -->

<?php if ($comments) : ?>
    <h3 id="comments"><?php comments_number(__('No Comments'), __('1 Comment'), __('% Comments')); ?> to <em><?php the_title(); ?></em></h3>
    <ul class="comments-list"><?php wp_list_comments() ?></ul>
    <?php paginate_comments_links() ?>

<?php else:?>

    <?php if (comments_open()) : ?>
        <!-- If comments are open, but there are no comments. -->
    <?php elseif (!is_page()) : // comments are closed ?>
        <!-- If comments are closed. -->
        <!--<h4>Comments are closed.</h4>-->
     <?php endif; ?>

<?php endif; ?>






<?php if (comments_open()) : ?>
    <?php comment_form() ?>
<?php endif; // if you delete this the sky will fall on your head ?>
