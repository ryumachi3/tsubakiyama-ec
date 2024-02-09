<?php get_header(); ?>
<?php get_template_part('nav'); ?>

<main id="l-main"><!-- l-main -->
	<section id="l-single-news">
		<article class="p-news__sec01__box">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="p-news__sec01__ttl">
				<div class="p-news__sec01__ttl__line1 c-sub-ttl c-f14">
					<!-- <span class="p-news__sec01__ttl__char -first">n</span>
					<span class="p-news__sec01__ttl__char -first">e</span>
					<span class="p-news__sec01__ttl__char -first">w</span>
					<span class="p-news__sec01__ttl__char -first">s</span> -->
				</div>

				<div class="p-news__sec01__ttl__line2">
				<?php the_title(); ?>
				</div>
			</div>
		</article>

		<div class="p-news-dt__thumb__box">

			<div class="p-news-dt__thumb__dec c-f14" >
			<?php the_content(); ?>
			</div>
		</div>

		<?php endwhile; ?>
		<?php endif; ?>

	</section>
</main><!-- l-main -->


<?php get_footer(); ?>
<?php get_template_part('wp-footer'); ?>