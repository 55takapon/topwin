<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <!-- meta情報 -->
  <title><?php bloginfo( 'name' ); ?></title>
  <meta name="description" content="<?php bloginfo( 'description' ); ?>" />
  <meta name="keywords" content="" />
  <meta name=”robots” content=”noindex” />
  <!-- ogp -->
  <meta property="og:title" content="" />
  <meta property="og:type" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta property="og:site_name" content="" />
  <meta property="og:description" content="" />
  <!-- ファビコン -->
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png" />
  <!-- css -->
  <!--<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">-->
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/scroll-hint@latest/css/scroll-hint.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/styles.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/swiper.css">
  
  
  <!-- JavaScript -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/micromodal/dist/micromodal.min.js"></script>
  <!-- <script defer type="text/javascript" src="./assets/js/script.js"></script> -->
  
  <?php wp_head(); ?>
</head>
<body>

  <div class="header">
    <div class="header__section">
      <div class="header__inner">
        <div class="header__logo">
          <h1><a href="/" class="logo__link"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt=""></a></h1>
          
          
        </div><!-- /header__logo -->
  
        <div class="openbtn"><span></span><span></span><span></span></div>
      
      <nav class="global-nav" id="g-nav">
        <ul class="global-nav__list">
          <li class="global-nav__item"><a class="global-nav__link header-nav__link" href="/">ホーム</a></li>
          <li class="global-nav__item"><a class="global-nav__link header-nav__link" href="/news">お知らせ</a></li>
          <li class="global-nav__item"><a class="global-nav__link header-nav__link" href="/blog">ブログ</a></li>
          <li class="global-nav__item"><a class="global-nav__link header-nav__link" href="/plan">コース・料金</a></li>    
        </ul>
      </nav><!-- /global-nav -->

      <div class="header__info">
        <p class="header__info__text">10:00〜23:00</p>
        <div class="header__info__phone">
          <div><img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone01.png" alt=""></div>
          <p>
            0123-456-7890
          </p>
        </div><!-- /.tel -->
      </div><!-- /.header-info -->
      

      <button class="header__request__btn btn">
        <a href="/contact">資料請求</a>
      </button>

      <button class="header__contact__btn btn">
        <a href="/contact">お問い合わせ</a>
      </button>
  
      </div><!-- /header__inner -->
    </div><!-- /header__section -->
  </div><!-- /header -->


  
  