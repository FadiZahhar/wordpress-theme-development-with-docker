<div id="primary" class="sidebar-nav">
    <!-- Calls the callback functions that have been added to an action hook -->
    <?php do_action( 'before_sidebar' ); ?> 
    <!-- if function if the fucntion does not exists do dynamic sidebar otheriwse use dysidebar -->
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('dysidebar') ) : 
 
endif; ?>
</div>
