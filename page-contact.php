<?php get_header(); ?>



<div class="sub-hero">
    <div class="sub-hero__body">
      <div class="sub-hero__wrapper">
        <div class="sub-hero__inner">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cta.jpg" alt="">
          <div class="sub-hero__heading">
            <div class="sub-hero__title">
            お問い合わせ・<br class="sp-only">資料請求
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
             
<section class="contact-sub">
  <div class="mwform-contact l-inner">
  <div class="mwform" style="font-size:16px; color:#1B224C; ">

  <?php
  echo do_shortcode('[mwform_formkey key="131"]');
?>
  

  </div>
  </div>
</section>



<div class="footer__inner">
    <div class="l-inner footer__wrapper">

      <div class="footer__nav">
        <div class="footer__nav__wrapper">
          <div class="footer__nav__list"><a href="/">ホーム</a></div>
          <div class="footer__nav__list"><a href="/news">お知らせ</a></div>
          <div class="footer__nav__list"><a href="/blog">ブログ</a></div>
          <div class="footer__nav__list"><a href="/plan">コース・料金</a></div>
        </div>
      </div>
  
      <div class="footer__head">
        <div class="head__logo logo">
          <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/f-logo.png" alt=""></a>        
        </div>
        <div class="footer__info">
          
          <div class="footer__info__phone">
            <div class="footer__info__phone__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone02.png" alt=""></div>
            <p>
              <a href="tel:0123-456-7890">0123-456-7890</a>
            </p>
          </div><!-- /.tel -->
          <p class="footer__info__text">平日08:00〜20:00</p>
        </div><!-- /.footer__info -->
      </div>

    </div>
    

    

    

  </div><!-- /.footer__inner -->

  <div class="footer-corp l-inner">
    <p>© 2021 Topwin. </p>
  </div>

</footer><!-- /.footer -->


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  <script src="https://unpkg.com/micromodal/dist/micromodal.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://unpkg.com/scroll-hint@latest/js/scroll-hint.min.js"></script>
  <script type='text/javascript' src="<?php echo get_template_directory_uri(); ?>/assets/js/swiper.js"></script>
  <script type='text/javascript' src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
  
  <?php wp_footer(); ?>

</body>
</html>