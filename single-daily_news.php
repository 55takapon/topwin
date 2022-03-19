<?php get_header(); ?>

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


<section class="single-daily_news__outer blog-detail">
  <div class="l-inner">
    <div class="blog-detail__inner">
      
      <div class="blog-detail__title">
        お知らせのタイトルテキストテキストテキストテキスト
      </div>

      <div class="news-detail__date">
        <p>2020-10-01</p>
      </div>

      <h2>見出し1</h2>

      <P>本文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</P>

      <h3>見出し2</h3>

      <p>本文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>

      <blockquote>
        <p>引用文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
      </blockquote>

      <div  class="news-detail__img">
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

<?php get_footer(); ?>