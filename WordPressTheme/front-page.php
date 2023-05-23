<?php get_header(); ?>
<br /><br /><br />

<div class="l-inner">
  <?php if (have_posts()) : ?>
    <ul>
      <?php while (have_posts()) : the_post(); ?>
        <li><?php the_title(); ?></li>
    <?php endwhile;
    endif; ?>
    </ul>
</div>
<br /><br /><br /><br />
<div class="l-inner">
<ul>
<?php
$myposts = get_posts_daily_random();
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
	<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php endforeach;
wp_reset_postdata(); ?>
</ul>
</div>


<br /><br /><br />
<?php get_footer(); ?>