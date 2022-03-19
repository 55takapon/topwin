<!-- 同じカテゴリから関連記事を表示する -->
<?php

$categ = get_the_category($post->ID);
$catID = array();

foreach($categ as $cat){
	array_push($catID, $cat -> cat_ID);
}

$args = array(
	'post__not_in' => array($post->ID),
	'category__in' => $catID,
	'posts_per_page' => 3,
	'orderby' => 'rand'
);

$the_query = new WP_Query($args);
if($the_query -> have_posts()) :?>

<div class="relatedposts">
<?php while($the_query -> have_posts()) : $the_query -> the_post();
?>
	<div class="cell">
		<a href="<?php the_permalink(); ?>">
			<?php if(has_post_thumbnail()): the_post_thumbnail('thumbnail');
				else: ?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.jpg" alt="<?php the_title(); ?>">
				<?php endif; ?>
				</a>
				<div class="post-title">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</div>
		</a>
	</div>
<?php endwhile; ?>
</div>
<?php endif; wp_reset_postdata(); ?>




<!-- タグで関連記事を表示する -->
<?php
//記事の投稿タグを取得する
$tags = wp_get_post_tags($post->ID);

if($tags):
//$tagIDに現在のIDを代入
$tagID = array();
foreach($tags as $tag){
	array_push($tagID, $tag -> term_id);
}

$args = array(
	'tag__in' => $tagID,
	'post__not_in' => array($post->ID),
	'posts_per_page' => 6,
	'ignore_sticky_posts'=>1,
	'orderby'=>'rand',
);

$my_query = new WP_Query($args);

if($my_query-> have_posts()):
?>

<div class="related-tags">
	<?php while($my_query->have_posts()): $my_query->the_post(); ?>
		<div class="cell">
		<a href="<?php the_permalink(); ?>">
			<?php if(has_post_thumbnail()): the_post_thumbnail('thumbnail');
				else: ?>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/noimg-125.png" alt="<?php the_title(); ?>">
				<?php endif; ?>
				</a>
				<div class="post-title">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</div>
		</a>
	</div>

	<?php endwhile; ?>
</div>
	<?php endif;?>

<?php endif;
	 wp_reset_postdata(); ?>




<!-- カテゴリー一覧を表示する -->
<?php
	// 親カテゴリーのものだけを一覧で取得
	$args = array(
		'parent' => 0,
		'orderby' => 'term_order',
		'order' => 'ASC'
	);
	$categories = get_categories( $args );
?>

<?php foreach( $categories as $category ) : ?>
	<li>
		<a href="<?php echo get_category_link( $category->term_id ); ?>"><?php echo $category->name; ?></a>
	</li>
<?php endforeach; ?>