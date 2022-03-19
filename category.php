<?php get_header(); ?>

<div style="padding-top:80px;"></div>

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
  
  <div class="sub-page__title">
  <?php 
  $category = get_the_category(); 
  if ( $category[0] ) {
    echo '<a href="' . get_category_link( $category[0]->term_id ) . '">' . $category[0]->cat_name . '</a>';
  }
?>
  一覧</div>

  <section class="blog-sub">
  <div class="l-inner">
  
  <?php

$categ = get_the_category($post->ID);
$catID = array();

foreach($categ as $cat){
	array_push($catID, $cat -> cat_ID);
}

$args = array(
	'post__not_in' => array($post->ID),
	'category__in' => $catID,
	'posts_per_page' => 10,
	'orderby' => 'rand'
);

$the_query = new WP_Query($args);
if($the_query -> have_posts()) :?>

<div class="relatedposts">
<?php while($the_query -> have_posts()) : $the_query -> the_post();
?>

<div>
            <div class="blog-sub__wrapper">
              <div class="blog-sub__img">
                
                <a href="<?php the_permalink(  ); ?>">
<?php if(has_post_thumbnail()): ?>
<?php the_post_thumbnail(array(240,150), array('class' => 'thumb')); ?>
<?php else: ?>
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/noimage.jpg" alt="">
<?php endif; ?>
                </a>
              </div>
              
              <div class="blog-sub__body">
                <p class="blog-sub__date">
                <?php echo get_the_date('Y.m.d'); ?>
                </p>
                <a href="<?php the_permalink(  ); ?>">
                  <div class="blog-sub__title">
<?php
if ( mb_strlen( $post->post_title, 'UTF-8' ) > 20 ) {
  $title = mb_substr( $post->post_title, 0, 20, 'UTF-8' );
  echo $title . '…';
} else {
  echo $post->post_title;
}
?>
                  </div>
                  <div class="blog-sub__text">
                  <?php the_excerpt(); ?>
                    
                  </div>
                </a>
                
                
              </div>       
            </div><!-- /.blog-sub__wrapper -->
  </div>

<?php endwhile; ?>
<?php else:
  echo '記事はありませんでした' ?>
</div>
<?php endif; wp_reset_postdata(); ?>
  


  </div>



  


<?php
     if(function_exists('wp_pagenavi')):
      wp_pagenavi(array('query'=>$the_query));   ////wp_pagenavi()の呼び出し(ただし、引数の指定が必要！)
    endif;
     wp_reset_postdata();
?>

  </div><!-- /.l-inner -->
  </section>

<div style="margin-top: 45px;"></div>

<?php get_footer(); ?>