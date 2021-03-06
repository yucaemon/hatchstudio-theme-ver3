<dl class='category-popular'>
<dt>
<div class='header-img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/category-popular.svg">
</div>
</dt>
<?php
$post_id = get_the_ID();
foreach((get_the_category()) as $cat) {
$cat_id = $cat->cat_ID ;
break ;
}
query_posts(
array(
'cat' => $cat_id,
'showposts' => 5,
'post__not_in' => array($post_id)
)
);
if(have_posts()) :
?>
<?php while (have_posts()) : the_post(); ?>
  <!--表示する内容が入ります。-->
  <dd class="category-popular__content flexbox">
    <div class="category-popular__thumb-img">
      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
    </div>
    <p class="category-popular__title">
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </p>
  </dd>
  <!--表示する内容ここまで-->
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_query(); ?>
</dl>
