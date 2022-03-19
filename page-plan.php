<?php get_header(); ?>

<div class="sub-hero">
    <div class="sub-hero__body">
      <div class="sub-hero__wrapper">
        <div class="sub-hero__inner">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plan.jpg" alt="">
          <div class="sub-hero__heading">
            <div class="sub-hero__title">
              コース・料金
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

  <section class="plan__system">
    <div class="l-inner">
      <div class="plan__system__inner">
        <div class="sub-page__title">料金体系</div>
        <div class="plan__system__inner__wrapper">
          <div class="plan__system__inner-text">
            入会金 20,000円
          </div>
          <div class="plan__system__inner-mark">
            +
          </div>
          <div class="plan__system__inner-text">
            月額費用
          </div>

        </div>
      
      <p>Topwinのプログラムはオーダーメイドのため、プログラム内のサポート内容によって料金が変動します。おすすめのスタンダードプランでは、実績につながるまでサポートを包括的に行います。</p>

      </div>
      
    </div>

  </section>

  <section class="plan__plan plans">
    <div class="l-inner">
      <div class="sub-page__title">料金表</div>
      <div class="plan__plan__wrapper js-scrollable">

        <div class="plan__plan__inner plan-box">
          <div class="plan-box__head">
            エントリープラン
          </div>
          <div class="plan-box__body">
            <div class="plan-box__price">
              <?php echo number_format(get_field ('plan_price')['basic_plan']); ?>円~
            </div>
            <div class="plan-box__text">*月額（税抜価格）</div>
            <div class="plan-box__content">
              ✔ プログラム作成
            </div>
            <div class="plan-box__content">
              ✔ プログラム学習
            </div>
            <div class="plan-box__content">
              ✔ 週一回の実践ワーク
            </div>
            <div class="plan-box__content">
            
            </div>
            <div class="plan-box__content">
            
            </div>
          </div><!-- /.plan-box__body -->
      </div><!-- /.plan__plan__inner plan-box -->

      <div class="plan__plan__inner plan-box">
        <div class="plan-box__head">
          スタンダードプラン
        </div>
        <div class="plan-box__body">
          <div class="plan-box__price">
          <?php echo number_format(get_field ('plan_price')['exercise_plan']); ?>円~
          </div>
          <div class="plan-box__text">*月額（税抜価格）</div>
          <div class="plan-box__content">
            ✔ プログラム作成
          </div>
          <div class="plan-box__content">
            ✔ プログラム学習
          </div>
          <div class="plan-box__content">
            ✔ 週一回の実践ワーク
          </div>
          <div class="plan-box__content">
            ✔ 1on1 セッション
          </div>
          <div class="plan-box__content">
            
          </div>
        </div><!-- /.plan-box__body -->
      </div><!-- /.plan__plan__inner plan-box -->

      <div class="plan__plan__inner plan-box">
        <div class="plan-box__head-special">
          おすすめ<br>プレミアムプラン
        </div>
        <div class="plan-box__body">
          <div class="plan-box__price-special">
          <?php echo number_format(get_field ('plan_price')['osusume_plan']); ?>円~
          </div>
          <div class="plan-box__text">*月額（税抜価格）</div>
          <div class="plan-box__content">
            ✔ プログラム作成
          </div>
          <div class="plan-box__content">
            ✔ プログラム学習
          </div>
          <div class="plan-box__content">
            ✔ 週一回の実践ワーク
          </div>
          <div class="plan-box__content">
            ✔ 1on1 セッション
          </div>
          <div class="plan-box__content">
            ✔ オプションワーク
          </div>
        </div><!-- /.plan-box__body -->
      </div><!-- /.plan__plan__inner plan-box -->

      <div class="plan__plan__inner plan-box">
        <div class="plan-box__head">
          フレックスプラン
        </div>
        <div class="plan-box__body">
          <div class="plan-box__price">
          <?php echo number_format(get_field ('plan_price')['flex_plan']); ?>円~
          </div>
          <div class="plan-box__text">*月額（税抜価格）</div>
          <div class="plan-box__content">
            ＊別途ご相談ください
          </div>
          <div class="plan-box__content">
            
          </div>
          <div class="plan-box__content">
            
          </div>
          <div class="plan-box__content">
            
          </div>
          <div class="plan-box__content">
            
          </div>
        </div><!-- /.plan-box__body -->
      </div><!-- /.plan__plan__inner plan-box -->

    



      </div><!-- /.plan__plan__wrapper -->
        
      
    </div><!-- /.l-inner -->

  </section>

  <?php get_footer(); ?>