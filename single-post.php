<?php
/*
Template Name: サイドバーあり
Template Post Type: blog
*/
get_header(); ?>

<div style="padding-top: 80px;"></div>

<div class="breadcrumbs__outer">
    <div class="l-inner">
      <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
      </div>
    </div>
  </div>
  
  <div class="single-post__wrapper l-inner">

  <main>
  <section class="blog-detail">
  <div class="l-inner">
    <div class="blog-detail__inner">
      <div class="blog-detail__category">
  
  <?php 
  $category = get_the_category(); 
  if ( $category[0] ) {
    echo '<a href="' . get_category_link( $category[0]->term_id ) . '">' . $category[0]->cat_name . '</a>';
  }
?>

      </div>

      <div class="blog-detail__title">
      <?php the_title(); ?>
      </div>

<?php wp_social_bookmarking_light_output_e(null, get_permalink(), the_title("", "", false)); ?>


      <div class="blog-detail__img">
                
<?php if(has_post_thumbnail()): ?>
<?php the_post_thumbnail(array(590,370), array('class' => 'thumb')); ?>
<?php else: ?>
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/noimage.jpg" alt="">
<?php endif; ?>

      </div>

      <h2>見出しh2</h2>

      <P>親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。</P>

      <h3>見出しh3</h3>

      <p>本文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>

      <blockquote>
        <p>引用文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
      </blockquote>

      <div  class="blog-detail__img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sample4.jpg" alt="">
      </div>

      
    
      <ul>
        <li>リストリストリストリストリスト</li>
        <li>リストリストリストリストリストリストリストリストリスト</li>
        <li>リストリストリストリストリストリストリストリストリストリストリストリストリストリスト</li>
      </ul>








      <p class="text-link"><a href="">テキストリンクテキストリンク</a></p>

    </div>
    

  </div>

  

</section>
  

<div class="l-inner">
  <h3 class="blog-detail__osusume">おすすめの記事</h3>
</div>

  <section class="blog-recommend">
    <div class="l-inner">
      <div class="blog-recommend__inner">

<?php
$tag_posts = get_posts(array(
    'post_type' => 'post', // 投稿タイプ
    'tag_id' => 0, // タグIDを番号で指定する場合
    'tag'    => 'pickup', // タグをスラッグで指定する場合
    'posts_per_page' => 3, // 表示件数
    'orderby' => 'date', // 表示順の基準
    'order' => 'DESC' // 昇順・降順
));
global $post;
if($tag_posts): foreach($tag_posts as $post): setup_postdata($post); ?>
  
<!-- ループはじめ -->
          
            <div class="blog-recommend__wrapper">
              <div class="blog-recommend__img">
              <div class="blog-recommend__category">

<?php 
  $category = get_the_category(); 
  if ( $category[0] ) {
    echo '<a href="' . get_category_link( $category[0]->term_id ) . '">' . $category[0]->cat_name . '</a>';
  }
?>
              </div>
                <a href="<?php the_permalink() ?>">

<?php if(has_post_thumbnail()): ?>
<?php the_post_thumbnail(array(210, 128), array('class' => 'thumb')); ?>
<?php endif; ?>

                </a>
              </div>
              
              <div class="blog-recommend__body">
                <p class="blog-recommend__date">
                  <?php the_time('Y/m/d') ?>
                </p>
                <div class="blog-recommend__title">
                <a href="<?php the_permalink() ?>">
                <?php the_title(); ?>
                </a>
                </div>
                <div class="blog-recommend__text">
                  <?php the_excerpt(); ?>
                </div>
                
              </div>       
            </div><!-- /.recommend__wrapper -->

<!-- ループおわり -->
  
<?php endforeach; endif; wp_reset_postdata(); ?>

    
      </div> 
    </div><!-- /.blog -->
  </section>

  </main>
  

<aside class="single-post__aside">
<div class="blog-side__inner">
        

<div class="blog-side__sub-title">
  関連記事
</div>

<?php

$categ = get_the_category($post->ID);
$catID = array();

foreach($categ as $cat){
	array_push($catID, $cat -> cat_ID);
}

$args = array(
	'post__not_in' => array($post->ID),
	'category__in' => $catID,
	'posts_per_page' => 3,
	'orderby' => 'rand'
);

$the_query = new WP_Query($args);
if($the_query -> have_posts()) :?>

<div class="relatedposts">
<?php while($the_query -> have_posts()) : $the_query -> the_post();
?>

          <div class="blog-side__wrapper">
              <a href="<?php the_permalink() ?>">
            <div class="blog-side__img">
<?php if(has_post_thumbnail()): ?>
<?php the_post_thumbnail(array(120, 90), array('class' => 'blog-side__thumb')); ?>
<?php else: ?>
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/noimage.jpg" alt="">
<?php endif; ?>
              </a>
            </div>
            <div class="blog-side__body">
              <div class="blog-side__title">
                <a href="<?php the_permalink() ?>">
<?php
if ( mb_strlen( $post->post_title, 'UTF-8' ) > 30 ) {
  $title = mb_substr( $post->post_title, 0, 30, 'UTF-8' );
  echo $title . '…';
} else {
  echo $post->post_title;
}
?>
                </a>
              </div>
              
            </div>       
          </div><!-- /.blog-side__wrapper -->

<?php endwhile; ?>
<?php else:
  echo '記事はありませんでした' ?>
</div>
<?php endif; wp_reset_postdata(); ?>



<div class="blog-side__sub-title">
  カテゴリー
</div>

<ul class="blog-side__category-list">
<?php
// パラメータを指定
$args = array(
	// カテゴリー内の記事数順で指定
    'orderby' => 'count',
    // 降順で指定
    'order' => 'DSC'
);
$categories = get_categories(  );

foreach( $categories as $category ){
	echo '<li><a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a> </li> ';
}
?>
</ul>



  
      </div><!-- /.news__inner -->
</aside>

  </div>
  
                  

<?php get_footer(); ?>