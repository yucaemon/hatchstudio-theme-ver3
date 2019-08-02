<?php include('head.php'); ?>
<body>
<div class='single-page outer'>
<?php include('components-php/header02.php'); ?>
<?php include('components-php/header-sp.php'); ?>
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php the_content();?>
<?php endwhile; ?>
<?php else : ?>
<?php endif; ?>
<div class='outer__inner'>
<div class='single__container'>
<div class='single__container__body flexbox--spacebetween'>
<div class='middle-contain'>
<h1 class='single-page__head-title'>
<?php the_title_attribute(); ?>
</h1>
<div class='flexbox'>
<div class='single-page__views'>
<i class="fas fa-heart"></i>
<?php if(function_exists('the_views')) {
  the_views();
} ?>
</div>
<div class='single-page__tags'>
<?php the_category( '  ',' 　' ); ?>
<?php $slug_name = basename(get_permalink()); ?>
</div>
</div>
<div class='single-page__detail flexbox--spacebetween'>
<div class='single-page__sns-icons flexbox'>
<div class='sns-icons__img'>
<a href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>&t=<?php echo get_the_title(); ?>">
<img src="<?php echo get_template_directory_uri(); ?>/images/share-facebook-icon.svg">
</a>
</div>
<div class='sns-icons__img'>
<a class="btn--twitter" href="http://twitter.com/share?url=<?php the_permalink();?>&text=<?php echo get_the_title(); ?>&via=hatchstudioinc&tw_p=tweetbutton&related=hatchstudioinc">
<img src="<?php echo get_template_directory_uri(); ?>/images/share-twitter-icon.svg"></a>
</div>
<div class='sns-icons__img'>
<a class="btn--pocket" href="http://getpocket.com/edit?url=<?php the_permalink();?>&title=<?php echo get_the_title;?>">
<img src="<?php echo get_template_directory_uri(); ?>/images/share-pokect-icon.svg">
</a>
</div>
</div>
<div class='single-page__post-info flexbox'>
<div class='single-page__dates'>
<?php the_time('Y/m/d'); ?>
</div>
<div class='author__img circle'>
<?php echo get_avatar( get_the_author_id(), 50 ); ?>
</div>
</div>
</div>
<div class='single-page__eyecatch-img'>
<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
</div>
<div class='single-page__entry-content'>
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php the_content();?>
<?php endwhile; ?>
<?php else : ?>
<?php endif; ?>
</div>
<?php include('components-php/wrote-models-box.php'); ?>
<?php include('components-php/affiliate-ad.php'); ?>
<?php include('components-php/article-sns-btns.php'); ?>
<?php include('components-php/related-article.php'); ?>
<?php include('components-php/this-page-tags.php'); ?>
<?php include('components-php/category-keywords.php'); ?>
<?php include('components-php/paging-nav.php'); ?>
</div>
<div class='side-contain'>
<?php include('components-php/affiliate-ad-sky.php'); ?>
<?php include('components-php/lists-news.php'); ?>
<?php include('components-php/lists-category-total.php'); ?>
<?php include('components-php/lists-popular-total.php'); ?>
<?php include('components-php/keywords.php'); ?>
<?php include('components-php/annie-ad-side.php'); ?>
<?php include('components-php/house-ad-side.php'); ?>
<?php include('components-php/business-ad-side.php'); ?>
<div class='side-amazon-ad'>
<img src="<?php echo get_template_directory_uri(); ?>/images/amazon-ad.svg">
</div>
<div class='side-fixed-area'></div>
</div>
</div>
</div>
</div>
<div class='outer__inner'>
<div class='articles__container__bottom flexbox--spacebetween'>
<div class='bt-left'>
<?php include('components-php/bt-news-lists.php'); ?>
</div>
<div class='bt-right'>
<!-- ?php include('components-php/affiliate-ad-article.php'); ? -->
<?php include('components-php/bt-popular-month.php'); ?>
</div>
</div>
</div>
<p id="PageTopBtn"><a href="#wrap">TOPへ</a></p>
<div class='bottom-container'>
<?php include('components-php/service.php'); ?>
<?php include('components-php/business-sp.php'); ?>
<?php include('components-php/annie-banner.php'); ?>
<?php include('components-php/footer.php'); ?>
<?php include('components-php/footer-sp.php'); ?>
</div>
</div>
</body>
