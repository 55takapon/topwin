<?php get_header(); ?>

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

  <div class="sub-page__title">カテゴリー一覧</div>


			  <div class="page-inner l-inner">
                <div class="page-main" id="pg-news">
                  <div class="main-container">
                    <div class="main-wrapper">
                      <div class="newsLists">


<?php
if ( have_posts() ):
	while ( have_posts() ) : the_post();
		get_template_part( 'content-archive' );
	endwhile;
endif;
?>
                      </div>
                      <div class="pager">
                        <ul class="pagerList">
<?php
if (function_exists( 'page_navi' )):
	page_navi();
endif;
?>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

  <div style="margin-bottom: 50px;"></div>

<?php get_footer(); ?>
