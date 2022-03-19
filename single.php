<?php
/*
Template Name: サイドバーあり
*/
get_header(); ?>

<div style="padding-top: 80px;"></div>

<div class="breadcrumbs__outer inner">
    <div class="l-inner">
      <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
      </div>
    </div>
  </div>
			  
<section class="blog-detail">
  <div class="l-inner">
    <div class="blog-detail__inner">
      <div class="blog-detail__category">カテゴリー</div>

      <div class="blog-detail__title">
        ブログタイトルテキストテキストテキストテキスト
      </div>

      <div class="blog-detail__img">
                
      <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/sample01.jpg" alt=""></a>
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
  <h3 class="blot-detail__osusume">おすすめの記事</h3>
</div>

  <section class="blog-sub">
    <div class="l-inner">
      <div class="blog-sub__inner">
          
            <div class="blog-sub__wrapper">
              <div class="blog-sub__img">
              <div class="blog-sub__category">カテゴリー</div>
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/sample01.jpg" alt=""></a>
              </div>
              
              <div class="blog-sub__body">
                <p class="blog-sub__date">
                  2020-12-27
                </p>
                <div class="blog-sub__title">
                  ブログタイトルテキストテキストテキストテキスト
                </div>
                <div class="blog-sub__text">
                  記事の冒頭文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                </div>
                
              </div>       
            </div><!-- /.blog-sub__wrapper -->

            <div class="blog-sub__wrapper">
              <div class="blog-sub__img">
                <div class="blog-sub__category">カテゴリー</div>
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/sample01.jpg" alt=""></a>
              </div>
              
              <div class="blog-sub__body">
                <p class="blog-sub__date">
                  2020-12-27
                </p>
                <div class="blog-sub__title">
                  ブログタイトルテキストテキストテキストテキストテキストテキストテキスト
                </div>
                <div class="blog-sub__text">
                  記事の冒頭文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                </div>
                
              </div>       
            </div><!-- /.blog-sub__wrapper -->
    
            
    
      </div> 
    </div><!-- /.blog -->
  </section>

<?php get_sidebar(); ?>
                  

<?php get_footer(); ?>