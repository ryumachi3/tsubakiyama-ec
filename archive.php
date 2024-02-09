<?php get_header(); ?>
<?php get_template_part('nav'); ?>
<main id="l-main">
	<div id="l-news">
		
		<section class="p-news__sec01">
			<article class="p-news__sec01__box">
				<div class="p-news__sec01__ttl">
					<div class="p-news__sec01__ttl__line1 c-sub-ttl c-f14">
					<span class="p-news__sec01__ttl__char -first">・</span>
					<span class="p-news__sec01__ttl__char -first">n</span>
					<span class="p-news__sec01__ttl__char -first">e</span>
					<span class="p-news__sec01__ttl__char -first">w</span>
					<span class="p-news__sec01__ttl__char -first">s</span>
					</div>

					<div class="p-news__sec01__ttl__line2 c-font-fm">
					<span class="p-news__sec01__ttl__char -second c-red c-circle">お</span>
					<span class="p-news__sec01__ttl__char -second">知</span>
					<span class="p-news__sec01__ttl__char -second">ら</span>
					<span class="p-news__sec01__ttl__char -second">せ</span>
					<span class="p-news__sec01__ttl__char -second">一</span>
					<span class="p-news__sec01__ttl__char -second">覧</span>
					</div>
				</div>

				<div class="p-news__sec01__list__box">
				<?php
					$paged = get_query_var('paged') ? get_query_var('paged') : 1;
					$args = array(
						'post_type'      => 'post',
						'order'          => 'DESC',
						'orderby'        => 'post_date',
						'post_status' => 'publish',
						'paged' => $paged,
						'posts_per_page' => 10,
					);
					$news = new WP_Query($args);
					if ($news->have_posts()) :
				?>
						<ul class="p-news__sec01__list">
								<?php $top_column = new WP_Query($args); if ($top_column->have_posts()) : while ($top_column->have_posts()) : $top_column->the_post(); ?>						
							<li class="p-news__sec01__list__item">
								<a href="<?php echo get_post_permalink(); ?>" class="p-news__sec01__list__link">
								   <div class="p-news__sec01__img__box1">
									<img src="<?php echo get_theme_file_uri() ?>/img/hanko_black_shingle.png" alt="" class="p-news__sec01__img">
								   </div>
								   <div class="p-news__sec01__img__box2">
									<div class="p-news__sec01__tags">
										<p class="p-news__sec01__tag1"><?php echo get_the_date('Y.m.d'); ?></p>
										<?php // カテゴリー名の繰り返し表示 
										$categories = get_the_category();
										foreach ($categories as $category) :
										?>
										<p class="p-news__sec01__tag2"><?php echo $category->name; ?></p>
										<?php endforeach; ?>
									</div>
									    <p class="p-news__sec01__txt"><?php echo get_the_title(); ?></p>
								   </div>
								</a>
							</li>
							<?php
							endwhile;
							endif;
							wp_reset_postdata();
							?>
						</ul>
						<?php endif; ?>
					</div>

			   <div class="l-news-pagination">
					<ul class="page-numbers">
						<li><a href="" class="prev page-numbers"><img src="<?php echo get_theme_file_uri() ?>/img/arrow-grey.svg" alt="" class="page-numbers__img"></a></li>
						<li class="page-numbers__list"><a href="" class="page-numbers__link c-f14">1</a></li>
						<li class="page-numbers__list"><a href="" class="page-numbers__link c-f14">2</a></li>
						<li class="page-numbers__list"><a href="" class="page-numbers__link c-f14">3</a></li>
						<li><a href="" class="next page-numbers"><img src="<?php echo get_theme_file_uri() ?>/img/arrow-red.svg" alt="" class="page-numbers__img"></a></li>
					</ul>
				</div>
		   </article>
       </section>
	</div>
</main>

<?php get_footer(); ?>
<?php get_template_part('wp-footer'); ?>