<?php get_header(); ?>


  
  <div class="hero">
    <div class="hero__body">
      <div class="l-inner hero__wrapper">
        <div class="hero__inner">
          <div class="hero__heading">
            <h1 class="hero__title">
              TOEFL対策は<br class="sp-only">Engress
            </h1>
            <div class="hero__subtitle">
              日本人へのTOEFL指導歴豊かな講師陣の<br>
              コーチング型TOEFLスクール
            </div>
            <div class="hero__request__btn btn">
              <a href="contact">資料請求</a>
            </div>
            <div class="hero__contact">
              <a href="contact">お問い合わせ</a>
            </div>

          </div>
           
        </div>
        
      </div>
    </div>
  </div> <!-- /hero -->
 

  <section class="message">
    <div class="message__outer">
      <div class="message__inner l-inner">
        <div class="message__head">
          <h2 class="message__title">
            TOEFL学習でこんな<br class="sp-only">悩みありませんか？
          </h2>
        </div>

        <div class="message__wrapper">
          <div class="message__sub-title">
            勉強の習慣が<br class="pc-only">
            身についていない
          </div>
          <div class="message__sub-title">
            勉強しているはず<br class="pc-only">
            なのに点数が伸びない
          </div>
          <div class="message__sub-title">
            正しい勉強方法が<br class="pc-only">
            わからない
          </div>
        </div>

        <div class="message__box">
          <div class="message__box__head">
            <div class="message__box__title">
              Engressは<br class="pc-only">
              <div>
              <span class="p-under">
                TOEFLに特化したスクールです
              </span>
              </div>
              
            </div>
            <div class="message__under"></div>
            <div class="message__box__text">
              完全オーダーメイドで、１人１人の悩みに合わせた最適な指導で<br class="pc-only">TOEFLの苦手分野を克服します。
            </div>
          </div>
        </div>

      </div>

    </div>
    
    

  </section>

  <section class="features  inner" id="3">
    <div class="l-inner">
      <div class="features__head">
        <h2 class="head__title">
          TOEFL対策に特化した<br class="sp-only">Engress3つの強み
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
            TOEFLに最適化された<br>
            無駄のないカリキュラム
          </h3>
          <div class="feature01__content__text features__text">
            TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。 
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
            日本人指導歴10年以上の<br>
            経験豊富な講師陣
          </h3>
          <div class="feature01__content__text features__text">
            Engressの講師陣は、もともと日本人向けにTOEFLを教えていた人が大多数です。また全メンバーがTESOL(英語教授法)を取得しており、知識と経験を兼ね備えている教育のプロフェッショナルです。 
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
            平均3ヶ月でTOEFL iBT<br class="sp-only">20点アップ
          </h3>
          <div class="feature01__content__text features__text">
            Engressは高校生からサラリーマンまで様々な年齢層の方々が通われていますが、完全オーダーメイドのカリキュラムで柔軟に対応しているため、平均3ヶ月でTOEFLスコアを20点アップさせています。 
          </div>  
        </div>

        <div class="feature01__img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature03.jpg" alt="">
        </div>

      </div><!-- /.wrapper -->
    </div><!-- /.l-inner -->
  </section><!-- /.section -->


  <section class="plan section__plan">
      
    <div class="plan__inner l-inner">
      <div class="plan__head">
        <h2 class="plan__head__title">Engressの料金プランはこちら</h2>

      <p class="plan__head__button btn"><a href="plan">料金を見てみる</a></p>
      </div>
      
      
      
    </div><!-- /.plan__inner -->

  </section>

  

  <section class="works section__works">
    <div class="works__outer">
    <div class="works__inner l-inner">
      <div class="works__head">
        <h2 class="head__title">TOEFL成功事例</h2>
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
        <td class="table__price">現在の学習状況やTOEFLスコア、目標のスコアをお聞きします。</td>
      </tr>
      

    </table><!-- /.features__table -->

    <table class="price__table table">
      
      <tr>
        <td class="table__number">03</td>
        <td class="table__title">学習プランのご提供</td>
        <td class="table__price">目標達成のために最適な学習プランをご提案致します。</td>
      </tr>
      

    </table><!-- /.features__table -->

    <table class="price__table table">
      
      <tr>
        <td class="table__number">04</td>
        <td class="table__title">ご入会</td>
        <td class="table__price">お申込み完了後、レッスンがスタートします。</td>
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
          <h4 class="accordion2-title jsAccordionTitle">Engressはサラリーマンでも学習を続けられるでしょうか？</h4>
          <div class="accordion2-content">Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</div>
          <h4 class="accordion2-title jsAccordionTitle">教材はオリジナルのものを使用しているのでしょうか？</h4>
          <div class="accordion2-content">テキストテキストテキスト</div>
          <h4 class="accordion2-title jsAccordionTitle">講師に日本人はいますか？</h4>
          <div class="accordion2-content">テキストテキストテキスト</div>
          <h4 class="accordion2-title jsAccordionTitle">TOEFL以外の海外大学合格のサポートもしてもらえるのでしょうか？</h4>
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
