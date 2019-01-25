<?php /** *  Template Name: カテゴリーページ */ ?>
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
『 <?php echo get_the_archive_title(); ?> 』の関連記事一覧
</h1>
<ul class='post-lists article-list box-list flexbox--spacebetween'>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); $countblock++; ?>
  <?php if($countblock == 1 or $countblock == 8 or $countblock == 12) : ?>
  //ここに広告のコードor画像など//
  <?php endif; ?>

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
  <?php endwhile; endif; ?>
</ul>
<?php include('components-php/affiliate-ad.php'); ?>
</div>
<div class='column-4 side-contain'>
<div class='side-amazon-ad'>
<img src="<?php echo get_template_directory_uri(); ?>/images/amazon-ad.svg">
</div>
<?php include('components-php/keywords.php'); ?>
<?php include('components-php/annie-ad-side.php'); ?>
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
