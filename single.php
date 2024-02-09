<?php get_header(); ?>
<?php get_template_part('nav'); ?>
<main id="l-main"><!-- l-main -->
	<section id="l-single-news">
		<article class="p-single-news">
			<div class="p-news__dt__thumb__sec01__tags">
				<p class="p-news__dt__thumb__sec01__tag1 c-f14"><?php echo get_the_date('Y.m.d'); ?></p>
				<?php
					// カテゴリー名の繰り返し表示
					$categories = get_the_category();
					foreach ($categories as $category) :
				?>
				<p class="p-news__dt__thumb__sec01__tag2"><?php echo $category->name; ?></p>
				<?php endforeach; ?>
			</div>

			<div class="p-news-dt__thumb__ttl">
			<?php the_title(); ?>
			</div>
			<article class="p-single-news__list">
					<?php $image_url = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'large'); ?>

				<?php if ($image_url) : ?>
					<div class="p-news-dt__thumb">
						<img class="p-news-dt__thumb__img" src="<?php echo $image_url[0]; ?>">
					</div>
				<?php endif; ?>

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="p-news-dt__thumb__box">
					<div class="p-news-dt__thumb__dec c-f14">
					<?php the_content(); ?>
					</div>
				</div>
				<?php endwhile; ?>
				<?php endif; ?>
			</article>

			<div class="p-single-news__btn__box">
				<div class="p-single-news__btn__left">
					<a href="#" class="p-single-news__btn__link c-f14">
						<img src="<?php echo get_theme_file_uri() ?>/img/arrow-black.svg" alt="" class="c-button__img -left">
						<p>前へ</p>
					</a>
				</div>

				<div class="p-single-news__btn__center">
					<a href="#" class="c-button3 -single-news c-f14">お知らせ一覧へ</a>
				</div>

				<div class="p-single-news__btn__right">
					<a href="#" class="p-single-news__btn__link c-f14">
						<p>次へ</p>
						<img src="<?php echo get_theme_file_uri() ?>/img/arrow-black.svg" alt="" class="c-button__img -right">
					</a>
				</div>
			</div>
		</article>
	</section>
</main><!-- l-main -->

<?php get_footer(); ?>
<?php get_template_part('wp-footer'); ?>