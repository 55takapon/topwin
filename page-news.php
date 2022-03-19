<?php get_header(); ?>
             
<div class="sub-hero">
    <div class="sub-hero__body">
      <div class="sub-hero__wrapper">
        <div class="sub-hero__inner">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/news.jpg" alt="">
          <div class="sub-hero__heading">
            <div class="sub-hero__title">
              お知らせ
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
  

  
  <div class="sub-page__title">お知らせ一覧</div>

  <section class="news-sub l-inner">
  
  <?php
$args = array( //リクエストを配列にまとめる
'post_type' => 'daily_news', //出力したい投稿タイプを指定
'posts_per_page' => 10, //1ページあたりの表示件数
'paged' => $paged //現在のページ情報、ページャーをつける場合に必要
);
$the_query = new WP_Query($args);//WP_Queryという設計図に自分が定義した$argsをパラメーターとして入れることでオブジェクトを生成
?>

<?php  if($the_query->have_posts()) : while ($the_query->have_posts()): $the_query->the_post(); ?>


  

<div class="l-inner">
<div class="news-sub__inner">
            <div class="news-sub__wrapper">     
              <div class="news-sub__body">
                <p class="news-sub__date">
                <?php echo get_the_date('Y.m.d'); ?>
                </p>
                <a href="<?php the_permalink(  ); ?>">
                  <div class="news-sub__title">
                  <?php the_title(); ?>
                  </div>
                </a>
                
              </div>       
            </div><!-- /.blog-sub__wrapper -->
      </div><!-- /.blog -->

</div>
      


<?php endwhile; ?>

<?php wp_reset_postdata(); ?>
<?php else: ?>
<?php endif; ?>

<div style="margin-top: 70px;"></div>

<?php
     if(function_exists('wp_pagenavi')):
      wp_pagenavi(array('query'=>$the_query));   ////wp_pagenavi()の呼び出し(ただし、引数の指定が必要！)
    endif;
     wp_reset_postdata();
?>

</section> 


<?php get_footer(); ?>