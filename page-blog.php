<?php get_header(); ?>
             
<div class="sub-hero">
    <div class="sub-hero__body">
      <div class="sub-hero__wrapper">
        <div class="sub-hero__inner">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog.jpg" alt="">
          <div class="sub-hero__heading">
            <div class="sub-hero__title">
              ブログ
            </div>
          </div>
        </div>
        
        

      </div>

    </div>
    
  </div> <!-- /hero -->

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
  
  <div class="sub-page__title">新着一覧</div>

  <section class="blog-sub">
    <div class="l-inner">
      <div class="blog-sub__inner">


      <?php
$args = array( //リクエストを配列にまとめる
'post_type' => 'post', //出力したい投稿タイプを指定
'posts_per_page' => 10, //1ページあたりの表示件数
'paged' => $paged //現在のページ情報、ページャーをつける場合に必要
);
$the_query = new WP_Query($args);//WP_Queryという設計図に自分が定義した$argsをパラメーターとして入れることでオブジェクトを生成
?>
<ul>
<?php  if($the_query->have_posts()) : while ($the_query->have_posts()): $the_query->the_post(); ?>
  <li>
            <div class="blog-sub__wrapper">
              <div class="blog-sub__img">
                <div class="blog-sub__category">
<?php 
  $category = get_the_category(); 
  if ( $category[0] ) {
    echo '<a href="' . get_category_link( $category[0]->term_id ) . '">' . $category[0]->cat_name . '</a>';
  }
?>
                </div>
                <a href="<?php the_permalink(  ); ?>">
<?php if(has_post_thumbnail()): ?>
<?php the_post_thumbnail(array(240,180), array('class' => 'thumb')); ?>
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
  </li>
<?php endwhile; ?>
</ul>
<?php wp_reset_postdata(); ?>
<?php else: ?>
<?php endif; ?>
          

          </div><!-- /.blog -->


<?php
     if(function_exists('wp_pagenavi')):
      wp_pagenavi(array('query'=>$the_query));   ////wp_pagenavi()の呼び出し(ただし、引数の指定が必要！)
    endif;
     wp_reset_postdata();
?>

  </div><!-- /.l-inner -->
  </section>

<?php get_footer(); ?>