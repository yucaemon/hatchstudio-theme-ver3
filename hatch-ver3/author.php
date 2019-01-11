<?php /** *  Template Name: 投稿者ページ */ ?>
<?php include('head.php'); ?>
<body>
<div class='category-page category outer'>
<?php include('components-php/header02.php'); ?>
<?php include('components-php/header-sp.php'); ?>
<div class='outer__inner'>
<div class='category__container'>
<div class='category__container__body flexbox--h-center'>
<div class='middle-contain'>
<h1 class='components-title'>
<div class="wrote-models-lists__img">
<?php echo get_avatar( get_the_author_id(), 100 ); ?>
</div>
<div class="wrote-models-lists__name"><?php echo get_the_author(); ?></div>
</h1>
<ul class='post-lists article-list box-list flexbox--spacebetween'>
  <?php $author = get_query_var('author'); $paged = get_query_var('paged'); $posts = query_posts('posts_per_page=20&author=' . $author . '&paged=' . $paged); ?>
  <?php foreach($posts as $post): setup_postdata($post); ?>
       <li class=''>
          <div class='post-lists__img article-list__img'>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
          </div>
          <div class='post-lists__text article-list__text'>
            <h3 class='post-lists__title list-title'>
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h3>
          </div>
       </li>
  <?php endforeach; ?>

</ul>
<div class='more-page'>
<div class='more-page__btn big-btn'>
<a href="<?php echo esc_url( home_url( '/archive/' ) ); ?>">> 記事一覧ページへ</a>>
</div>
</div>
</div>
<div class='column-4 side-contain'>
<!-- 広告 -->
<!-- 四角はっち公告 -->
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
  style="display:inline-block;width:336px;height:280px"
  data-ad-client="ca-pub-1574488309106788"
  data-ad-slot="5136876359"></ins>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({});
</script>
<!-- 広告 -->
<?php include('components-php/news-list.php'); ?>
<?php include('components-php/news-list.php'); ?>
<?php include('components-php/keywords.php'); ?>
<?php include('components-php/house-ad-side.php'); ?>
<?php include('components-php/business-ad-side.php'); ?>
<div class='side-fixed-area'></div>
</div>
</div>
</div>
</div>
<div class='outer__inner'>
<div class='articles__container__bottom flexbox--h-center'>
<?php include('components-php/bt-news-lists.php'); ?>
<?php include('components-php/bt-popular-month.php'); ?>
</div>
</div>
</div>
</body>
<p id="PageTopBtn"><a href="#wrap">TOPへ</a></p>
<div class='bottom-container'>
<?php include('components-php/service.php'); ?>
<?php include('components-php/annie-banner.php'); ?>
<?php include('components-php/footer.php'); ?>
<?php include('components-php/footer-sp.php'); ?>
</div>