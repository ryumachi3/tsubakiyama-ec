<?php get_header(); ?>
<?php
		// 記事のビュー数を更新(ログイン中・ロボットによる閲覧時は除く)
    if (!is_user_logged_in() && !is_robots()) {
        setPostViews(get_the_ID());
    }
?>
<?php get_template_part('nav'); ?>
<?php get_template_part('subnav'); ?>
<h2 class="c-title-sub-jp p-colum__title__jp"></h2>
	<div id="contents">
		<div class="l-contents-wrap01">
			<section class="l-common-sec p-100oku">
				<div class="l-common-sec__inner">
					<div class="p-100oku__archive__inner__title">
				<div class="p-100oku__archive__inner__title__line1">
				<span class="p-100oku__archive__inner__title__char__sub p-100oku__archive__inner__title__sub">ヒ</span>
				<span class="p-100oku__archive__inner__title__char__sub p-100oku__archive__inner__title__sub">ト</span>
				</div>

				<div class="p-100oku__archive__inner__title__line2">
				<span class="p-100oku__archive__inner__title__char">お</span>
				<span class="p-100oku__archive__inner__title__char">し</span>
				<span class="p-100oku__archive__inner__title__char">ゃ</span>
				<span class="p-100oku__archive__inner__title__char">れ</span>
				<span class="p-100oku__archive__inner__title__char">な</span>
				<span class="p-100oku__archive__inner__title__char">あ</span>
				<span class="p-100oku__archive__inner__title__char">の</span>
				<span class="p-100oku__archive__inner__title__char">女</span>
				<span class="p-100oku__archive__inner__title__char">性</span>
				<span class="p-100oku__archive__inner__title__char">に</span>
			</div>

			<div class="p-100oku__archive__inner__title__line3">
				<span class="p-100oku__archive__inner__title__char">今</span>
				<span class="p-100oku__archive__inner__title__char">贈</span>
				<span class="p-100oku__archive__inner__title__char">り</span>
				<span class="p-100oku__archive__inner__title__char">た</span>
				<span class="p-100oku__archive__inner__title__char">い</span>
				<span class="p-100oku__archive__inner__title__char p-100oku__archive__inner__num">1</span>
				<span class="p-100oku__archive__inner__title__char p-100oku__archive__inner__num">0</span>
				<span class="p-100oku__archive__inner__title__char p-100oku__archive__inner__num">0</span>
				<span class="p-100oku__archive__inner__title__char">の</span>
				<span class="p-100oku__archive__inner__title__char">モ</span>
				<span class="p-100oku__archive__inner__title__char">ノ</span>
				<span class="p-100oku__archive__inner__title__char p-100oku__archive__inner__circle">。</span>
			</div>
			</div>
					<!-- <h2 class="p-100oku__title__archive"><img class="" src="<?php bloginfo('template_url'); ?>/img/100oku_title.svg" alt="おしゃれなあの女性に今贈りたい100のモノ。"></h2> -->
				</div>
				<div class="l-common-sec__inner">
					<?php 
						$p_genre = get_query_var( 'genre' );
						$p_price = get_query_var( 'price' );
						$p_order = get_query_var( 'odr' );
					?>
					<form method="get" action="<?php echo home_url('100oku') ?>" class="p-100oku__form gsp-anime__archive__form">
						<div class="p-100oku__select__wrap">
								<select class="c-select p-100oku__select -genre" name='genre' id='genre'>
										<option value="" selected="selected">ジャンル</option>
										<?php
										$terms = get_terms('genre', ['parent' => 0, 'hide_empty' => 0]);
										foreach ($terms as $term) {
											$is_selected = "";
											if(strcmp($p_genre,$term->slug) == 0){
												$is_selected = 'selected';
											}
											echo '<option class="p-100oku__select__option" value="' . $term->slug . '" ' . $is_selected . ' >' . $term->name . '</option>';
										}
										?>
							</select>
							<select class="c-select p-100oku__select -budged" name='price' id='price'>
								<option value="" >予算</option>
								<?php
								$terms = get_terms('price_tag', ['parent' => 0, 'hide_empty' => 0]);
								foreach ($terms as $term) {
									$is_selected = "";								
									if(strcmp($p_price,$term->slug) == 0){
										$is_selected = 'selected';
									}
									echo '<option class="p-100oku__select__option" value="' . $term->slug . '"' . $is_selected . '>' . $term->name . '</option>';
								}
								?>
							</select>
							<select class="c-select p-100oku__select -popular" name='odr' id='odr'>
								<option value="popular" <?php echo strcmp($p_order,'popular') == 0?'selected':''; ?> >人気順</option>
								<option value="best" <?php echo strcmp($p_order,'best') == 0?'selected':''; ?>>殿堂入優先</option>
								<option value="cheap" <?php echo strcmp($p_order,'cheap') == 0?'selected':''; ?>>価格が低い順</option>
								<option value="expensive" <?php echo strcmp($p_order,'expensive') == 0?'selected':''; ?>>価格が高い順</option>
							</select>
						</div>
						<div class="p-100oku__submit__wrap">
							<input class="c-submit p-100oku__submit" id="submit" type="submit" value="で表示" />
						</div>
					</form>

					<ul class="p-100oku__list">
						<?php
						// 100の贈りもの
						$args = array(
							'post_type' => '100oku',
							'posts_per_page' => 100,
							'post_status' => 'publish',
							'meta_query' => array(
								"archive" => array(	'key'=>'archive_flag',
									'value'=> 0,
									'compare'=>'='
								),
							)
						);
						if (!empty($p_genre) && !empty($p_price)) {
							// ジャンルあり 価格あり
							$args['tax_query'] = array(
								'relation' => 'AND',
								array(
										'taxonomy' => 'genre',
										'field' => 'slug',
										'terms' => $p_genre
								),
								array(
										'taxonomy' => 'price_tag',
										'field' => 'slug',
										'terms' => $p_price
								),
							);
						} elseif (!empty($p_genre) && empty($p_price)) {
							// ジャンルあり 価格なし
							$args['tax_query'] = array(
								array(
									'taxonomy' => 'genre',
									'field'    => 'slug',
									'terms'    => $p_genre,
								),
							);
						} elseif (empty($p_genre) && !empty($p_price)) {
							// ジャンルなし 価格あり
							$args['tax_query'] = array(
								array(
									'taxonomy' => 'price_tag',
									'field'    => 'slug',
									'terms'    => $p_price,
								),
							);
						} else {
							// 条件なし
						}
						// $p_orderの値に応じて、記事の並び順を切り替える
						if ( $p_order == 'best' ) {
							// 殿堂入り優先
							$args['meta_query'] = array(
								"relation" => "AND",
								"archive" => array(	'key'=>'archive_flag',
									'value'=> 0,
									'compare'=>'='
								),
								"best" => array(
									"key" => "best_flag",
									'type' => 'NUMERIC',
								),
							);
							$args['orderby'] = array( 
								"best" => "DESC",
							);
						} elseif ( $p_order == 'cheap' ) {
							// 価格が低い順
							$args['meta_key'] = 'price';
							$args['orderby'] = array( 'meta_value_num' => 'ASC' );
						} elseif ( $p_order == 'expensive' ) {
							// 価格が高い順
							$args['meta_key'] = 'price';
							$args['orderby'] = array( 'meta_value_num' => 'DESC' );
						} else {
							// 人気順
							$args['orderby'] = array('menu_order' => 'ASC');
						}

						$my_query = new WP_Query($args);
						if ($my_query->have_posts()) :
						?>
							<?php
							$i = 1;
							while ($my_query->have_posts()) : $my_query->the_post();
								// ここに記事を表示するコードを書く
								$images = get_field('garally'); // フィールド名の指定
								$image_url = '';
								if ($images) :
									$image_url = $images[0]['sizes']['large'];
									$image_alt = $images[0]['alt'];
								endif;
								if (empty($image_url)) {
									$image_url = get_theme_file_uri() . '/img/no-img.png';
								}
								$brand = get_field('brand');
								$price = get_field('price');
								$capa = get_field('capa');
								$best_seller_flag = get_field('best_flag');
							?>
				<?php // 殿堂入りタグ有無判定
				// $custom_post_tag = '100okutag'; // タクソノミーのスラッグを指定
				// $custom_post_tag_terms = get_the_terms($id,$custom_post_tag);
				// $best_seller_flag = false;
				// if(!empty($custom_post_tag_terms)){
				//   if(!is_wp_error( $custom_post_tag_terms )){
				//     foreach($custom_post_tag_terms as $term){                    
				//       if($term->slug == 'best-seller'){
				//         $best_seller_flag = true;
				//         break;
				//       }
				//     }
				//   }
				// }
				?>
				<li class="p-100oku__list__item gsp-anime__archive">
									<?php 
									// echo 'view:' . get_post_meta(get_the_ID(), 'post_views_count', true) . '<br>'; 
									// echo 'best_flag:' . $best_seller_flag;								
									?>
					<a href="<?php echo get_post_permalink(); ?>" class="p-100oku__list__item__thumb__link">
										<span class="p-100oku__list__item__num"><?php echo $i ?></span>
					<span class="p-100oku__list__item__thumb__wrap <?php echo $best_seller_flag?'-best-seller':''; ?>">
						<img class="p-100oku__list__item__thumb" src="<?php echo $image_url; ?>" alt="<?php echo $image_alt ?>">
					</spam>
					</a>
					<div class="p-100oku__list__item__box">
					<a href="<?php echo get_post_permalink(); ?>" class="p-100oku__list__item__title__link">
						<h3 class="p-100oku__list__item__title">
						<span class="p-100oku__list__item__title__brand"><?php echo $brand; ?></span>
						<span class="p-100oku__list__item__title__name"><?php the_title(); ?></span>
						</h3>
						<p class="p-100oku__list__item__spec">
						<span class="p-100oku__list__item__spec__price">¥<?php echo number_format($price); ?></span>
						<?php if ($capa) : ?>
							/
							<span class="p-100oku__list__item__spec__capa"><?php echo $capa; ?></span>
						<?php endif; ?>
						</p>
					</a>
					</div>
				</li>
				<?php
				$i++;
				endwhile;
				?>
			<?php
				wp_reset_query();
			endif;
			?>
			</ul>
					<?php
						$args['meta_query']['archive']['value'] =  1;
						$my_query = new WP_Query($args);
						if ($my_query->have_posts()) :
					?>
					<h2 class="p-archive__title">
						<span class="c-title-top-en p-archive__title__en">Archive</span>
						<span class="c-title-top-jp p-archive__title__jp">これまでに100okuで紹介されたプレゼント</span>
					</h2>
					<ul class="p-100oku__list">				
							<?php
							$i = 1 ;
							while ($my_query->have_posts()) : $my_query->the_post();
								// ここに記事を表示するコードを書く
								$images = get_field('garally'); // フィールド名の指定
								$image_url = '';
								if ($images) :
									$image_url = $images[0]['sizes']['large'];
									$image_alt = $images[0]['alt'];
								endif;
								if (empty($image_url)) {
									$image_url = get_theme_file_uri() . '/img/no-img.png';
								}
								$brand = get_field('brand');
								$price = get_field('price');
								$capa = get_field('capa');
								$best_seller_flag = get_field('best_flag');
							?>
				<li class="p-100oku__list__item">
					<a href="<?php echo get_post_permalink(); ?>" class="p-100oku__list__item__thumb__link">
										<!-- <span class="p-100oku__list__item__num"><?php echo $i ?></span> -->
					<span class="p-100oku__list__item__thumb__wrap <?php echo $best_seller_flag?'-best-seller':''; ?>">
						<img class="p-100oku__list__item__thumb" src="<?php echo $image_url; ?>" alt="<?php echo $image_alt ?>">
					</spam>
					</a>
					<div class="p-100oku__list__item__box">
					<a href="<?php echo get_post_permalink(); ?>" class="p-100oku__list__item__title__link">
						<h3 class="p-100oku__list__item__title">
						<span class="p-100oku__list__item__title__brand"><?php echo $brand; ?></span>
						<span class="p-100oku__list__item__title__name"><?php the_title(); ?></span>
						</h3>
						<p class="p-100oku__list__item__spec">
						<span class="p-100oku__list__item__spec__price">¥<?php echo number_format($price); ?></span>
						<?php if ($capa) : ?>
							/
							<span class="p-100oku__list__item__spec__capa"><?php echo $capa; ?></span>
						<?php endif; ?>
						</p>
					</a>
					</div>
				</li>
				<?php
				$i++;
				endwhile;
				?>
			<?php
				wp_reset_query();
			?>
					</ul>
					<?php endif; ?>
				</div><!-- l-common-sec__inner -->
			</section>
		</div>
	</div>
</div> <!-- l-main -->
<?php get_footer(); ?>
<?php get_template_part('wp-footer'); ?>