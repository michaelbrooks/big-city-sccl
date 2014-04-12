	</div><!--#main-->
</div> <!--#root-->
</div> <!--#sticky-wrap-->
<div id="footer">
    <div class="footer-container">
        <p class="copyright">&copy; <?php echo date('Y');?> <?php bloginfo( 'name' ); ?> All Rights Reserved.
	<a href="http://depts.washington.edu/sccl/members/">Members</a>
	</p>
        <div id="base-widgets">
            <?php dynamic_sidebar("Base widgets"); ?>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>