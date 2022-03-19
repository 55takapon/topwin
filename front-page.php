<?php get_header(); ?>

  <div class="l-hero-fade">

    <div class="swiper-container">
      <div class="swiper-wrapper">
        <!-- 背景画像１ -->
        <div class="swiper-slide">
            <div class="slide-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/mainbg01a.jpg');"></div>
        </div>
        <!-- 背景画像２ -->
        <div class="swiper-slide">
            <div class="slide-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/mainbg02a.jpg');"></div>
        </div>
        <!-- 背景画像３ -->
        <div class="swiper-slide">
          <div class="slide-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/mainbg03a.jpg');"></div>
        </div>
      </div>
      <!-- 丸いページネーション
      <div class="swiper-pagination swiper-pagination-white"></div>
      -->
      <!-- 左右のページ送り
      <div class="swiper-button-prev swiper-button-white"></div>
      <div class="swiper-button-next swiper-button-white"></div>
      -->
    </div>

      <div class="l-hero-fade-title hero__title">
        <p>
        CHALLENGE<br class="sp-only">
         TO WIN
        </p>
      </div>

  </div>
  
  
 

  <section class="message">
    <div class="message__outer">
      <div class="message__inner l-inner">
        <div class="message__head">
          <h2 class="message__title">
            人材育成でこんな<br class="sp-only">お悩みありませんか？
          </h2>
        </div>

        <div class="message__wrapper">
          <div class="message__sub-title">
            育成しても<br class="pc-only">
            育ってない
          </div>
          <div class="message__sub-title">
            スキルの<br class="pc-only">
            差が大きい
          </div>
          <div class="message__sub-title">
            育成中に<br class="pc-only">
            離脱される
          </div>
        </div>

        

      </div>

    </div>
    
    

  </section>

  <section class="features  inner" id="3">
    <div class="l-inner">
      <div class="features__head">
        <h2 class="head__title">
          実践型に特化した<br class="sp-only">3つの強み
        </h2>
      </div>
    </div>
  </section><!-- /.section -->

  <section class="feature01 features__content">
    <div class="l-inner">
      
      <div class="features__wrapper">
        
        <div class="feature01__content">
          <div class="feature01__mark">
            <p>特長 １</p>
          </div>

          <h3 class="feature01__content__title features__title">
            実践重視の結果に<br>
            フォーカスしたプログラム
          </h3>
          <div class="feature01__content__text features__text">
            Topwinでは実践重視の結果にフォーカスしたプログラムを準備しております。座学よりもワークをメインとしインプットしたら即アウトプットする形のプログラムとしています。
          </div>  
        </div>

        <div class="feature01__img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature01.jpg" alt="">
        </div>

      </div><!-- /.wrapper -->
    </div><!-- /.l-inner -->
  </section><!-- /.section -->

  <section class="feature01 features__content">
    <div class="l-inner">
      
      <div class="features__wrapper">
        
        <div class="feature02__img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature02.jpg" alt="">
        </div>

        <div class="feature01__content">
          <div class="feature01__mark">
            <p>特長 ２</p>
          </div>

          <h3 class="feature01__content__title features__title">
            現場で実績を積み重ねてる<br>
            現役メンター陣
          </h3>
          <div class="feature01__content__text features__text">
            Topwinのメンター陣は、現場で実績を積み重ね続けている現役メンバーが担当します。現役プロフェッショナルであるメンターから学ぶことで学びから実践への落とし込みもスムーズに行えます。 
          </div>  
        </div>

      </div><!-- /.wrapper -->
    </div><!-- /.l-inner -->
  </section><!-- /.section -->

  <section class="feature01 features__content">
    <div class="l-inner">
      
      <div class="features__wrapper">
        
        <div class="feature01__content">
          <div class="feature01__mark">
            <p>特長 ３</p>
          </div>

          <h3 class="feature01__content__title features__title">
            卒業生の営業成績<br class="sp-only">
            平均20%アップ
          </h3>
          <div class="feature01__content__text features__text">
            Topwinは20代から50代の様々な年齢層の方々が利用されています。卒業までにアウトプットを前提としてインプットするプログラムとしております。実践へフォーカスしていることから卒業3ヶ月後には効果が数字に現れています。 
          </div>  
        </div>

        <div class="feature01__img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature03.jpg" alt="">
        </div>

      </div><!-- /.wrapper -->
    </div><!-- /.l-inner -->
  </section><!-- /.section -->


  

  

  <section class="works section__works">
    <div class="works__outer">
    <div class="works__inner l-inner">
      <div class="works__head">
        <h2 class="head__title">Topwin成功事例</h2>
      </div>

<?php
	if ( have_rows( 'first_works_detail' ) ):
		while ( have_rows( 'first_works_detail' ) ): the_row();
?>
      
      <div class="works__items cards">
        <div class="works__item card">
          <div class="card__head">
            
            <?php echo get_field('first_works_detail')['works_text']; ?>
          </div>
          <div class="card__box">
            <div class="card__img">

<?php
$image_id = get_sub_field( 'works_img' );
echo wp_get_attachment_image( $image_id, 'front' );
?>
              
            </div>
          </div>
          
          <div class="card__body">
            <div class="card__body__wrapper">
              <div class="card__job">
              <?php echo get_field('first_works_detail')['works_job']; ?>
              </div>
              <div class="card__name">
              <?php echo get_field('first_works_detail')['works_name']; ?>
              </div>
            </div>
            
            <div class="card__text">
              

              <?php echo get_field('first_works_detail')['works_result']; ?>
              
            </div>
          </div>       
        </div><!-- /.card -->

<?php
  endwhile;
endif;
?>

<?php
	if ( have_rows( 'second_works_detail' ) ):
		while ( have_rows( 'second_works_detail' ) ): the_row();
?>

        <div class="works__item card">
          <div class="card__head">
            
            <?php echo get_field('second_works_detail')['works_text']; ?>
          </div>
          <div class="card__box">
            <div class="card__img">

<?php
$image_id = get_sub_field( 'works_img' );
echo wp_get_attachment_image( $image_id, 'front' );
?>

            </div>
          </div>
          
          <div class="card__body">
            <div class="card__body__wrapper">
              <div class="card__job">
              <?php echo get_field('second_works_detail')['works_job']; ?>
              </div>
              <div class="card__name">
              <?php echo get_field('second_works_detail')['works_name']; ?>
              </div>
            </div>
            
            <div class="card__text">
              
              <?php echo get_field('second_works_detail')['works_result']; ?>
            </div>
          </div>       
        </div><!-- /.card -->

<?php
  endwhile;
endif;
?>

<?php
	if ( have_rows( 'third_works_detail' ) ):
		while ( have_rows( 'third_works_detail' ) ): the_row();
?>

        <div class="works__item card">
          <div class="card__head">
            
            <?php echo get_field('third_works_detail')['works_text']; ?>
          </div>
          <div class="card__box">
            <div class="card__img">

<?php
$image_id = get_sub_field( 'works_img' );
echo wp_get_attachment_image( $image_id, 'front' );
?>

            </div>
          </div>
          
          <div class="card__body">
            <div class="card__body__wrapper">
              <div class="card__job">
              <?php echo get_field('third_works_detail')['works_job']; ?>
              </div>
              <div class="card__name">
              <?php echo get_field('third_works_detail')['works_name']; ?>
              </div>
            </div>
            
            <div class="card__text">
              
              <?php echo get_field('third_works_detail')['works_result']; ?>
            </div>
          </div>       
        </div><!-- /.card -->

<?php
  endwhile;
endif;
?>

      </div><!-- /.plan__items cards -->
    </div><!-- /.plan__inner -->
    </div><!-- /.works__outer -->
</section>

<section class="price" id="2">
  <div class="l-inner">
    <div class="price__head">
      <h2 class="head__title">ご利用の流れ</h2>
    </div>

    <table class="price__table table">
      <tr>
        <td class="table__number">01</td>
        <td class="table__title">お問い合わせ</td>
        <td class="table__price">まずはフォームまたはお電話からお申し込みください。</td>
      </tr>

    </table><!-- /.features__table -->
    <table class="price__table table">
      
      <tr>
        <td class="table__number">02</td>
        <td class="table__title">ヒアリング</td>
        <td class="table__price">現在の育成状況及びお悩みをお聞きします。</td>
      </tr>
      

    </table><!-- /.features__table -->

    <table class="price__table table">
      
      <tr>
        <td class="table__number">03</td>
        <td class="table__title">プログラムご提供</td>
        <td class="table__price">目標達成のために最適なプログラムをご提案いたします。</td>
      </tr>
      

    </table><!-- /.features__table -->

    <table class="price__table table">
      
      <tr>
        <td class="table__number">04</td>
        <td class="table__title">ご入会</td>
        <td class="table__price">お申込み完了後、レクチャーがスタートします。</td>
      </tr>

    </table><!-- /.features__table -->

    

  </div><!-- /.l-inner -->
</section><!-- /.section -->

<section class="faq">
  <div class="l-inner">
    <div class="faq__head">
      <h2 class="head__title">よくある質問</h2>
    </div>

    <div class="faq__contents">

      <div class="accordion2 l-inner">
        <div class="accordion2-container">
          <h4 class="accordion2-title jsAccordionTitle">Topwinは会社員以外でも入会可能でしょうか？</h4>
          <div class="accordion2-content">Topwinは各個人に最適なプログラムをご提供しております。会社員以外の方ももちろん参加いただけます。</div>
          <h4 class="accordion2-title jsAccordionTitle">プログラムはオリジナルのものを使用しているのでしょうか？</h4>
          <div class="accordion2-content">テキストテキストテキスト</div>
          <h4 class="accordion2-title jsAccordionTitle">講師を選択することは可能でしょうか？</h4>
          <div class="accordion2-content">テキストテキストテキスト</div>
          <h4 class="accordion2-title jsAccordionTitle">卒業後の継続サポートもしてもらえるのでしょうか？</h4>
          <div class="accordion2-content">テキストテキストテキスト</div>
        </div><!-- accordion2__container -->
      </div><!-- /.accordion2 -->

    </div><!-- /.faq__contents -->
  </div><!-- /.l-inner -->
</section><!-- /.section -->

<section class="blog-news">
  <div class="l-inner">
    <div class="blog-news__inner blog-news__wrapper">

      <div class="blog__inner">
        <div class="info__head">
          <h3 class="blog-news__title">ブログ</h3>
        </div>

        <?php
$args = array( //リクエストを配列にまとめる
'post_type' => 'post', //出力したい投稿タイプを指定
'posts_per_page' => 3, //1ページあたりの表示件数
'paged' => $paged //現在のページ情報、ページャーをつける場合に必要
);
$the_query = new WP_Query($args);//WP_Queryという設計図に自分が定義した$argsをパラメーターとして入れることでオブジェクトを生成
?>
<ul>
<?php  if($the_query->have_posts()) : while ($the_query->have_posts()): $the_query->the_post(); ?>
  <li>
            
              <div class="blog__wrapper">
                <div class="blog__img">
                  <div class="blog__category">
                    <?php the_category(); ?>
                  </div>
                  <a href="<?php the_permalink(  ); ?>">
<?php if(has_post_thumbnail()): ?>
<?php the_post_thumbnail(array(150,100), array('class' => 'blog__img__thumb')); ?>
<?php else: ?>
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/noimage.jpg" alt="">
<?php endif; ?>
                </a>
                </div>
                <div class="blog__body">
                  <div class="blog__title">
                    <a href="<?php the_permalink(  ); ?>"><?php the_title(); ?></a>
                  </div>
                  <p class="blog__date">
                  <?php echo get_the_date('Y.m.d'); ?>
                  </p>
                </div>
              </div><!-- /.blog__wrapper -->
            
  </li>
<?php endwhile; ?>
</ul>
<?php wp_reset_postdata(); ?>
<?php else: ?>
<?php endif; ?>
    
        
  
      </div><!-- /.blog__inner -->
        
  
      <div class="news__inner">
        <div class="info__head">
          <h3 class="blog-news__title">お知らせ</h3>
        </div>

        <?php
$args = array( //リクエストを配列にまとめる
'post_type' => 'daily_news', //出力したい投稿タイプを指定
'posts_per_page' => 3, //1ページあたりの表示件数
'paged' => $paged //現在のページ情報、ページャーをつける場合に必要
);
$the_query = new WP_Query($args);//WP_Queryという設計図に自分が定義した$argsをパラメーターとして入れることでオブジェクトを生成
?>

<?php  if($the_query->have_posts()) : while ($the_query->have_posts()): $the_query->the_post(); ?>


        <div class="news__head">
          <div class="news__body">
            <p class="news__date">
            <?php echo get_the_date('Y.m.d'); ?>
            </p>
            <div class="news__title">
              <a href="<?php the_permalink(  ); ?>"><?php the_title(); ?></a>
            </div>
          </div>
        </div>
        

<?php endwhile; ?>

<?php wp_reset_postdata(); ?>
<?php else: ?>
<?php endif; ?>
  
      </div><!-- /.news__inner -->
    </div>
  </div>    

</section>

<?php get_footer(); ?>
