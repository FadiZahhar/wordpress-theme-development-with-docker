<!-- a div about post, if there is a post please post
them with the title and the content else dont show anything -->

<div>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
<?php the_content(); ?>
<?php endwhile; else: ?>
<p>There no posts to show</p>
<?php endif; ?>
</div>