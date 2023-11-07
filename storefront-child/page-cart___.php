<?php get_header(); ?>
<?php get_template_part('nav'); ?>
<main id="l-main"><!-- l-main -->
  <section id="l-cart">
    <article class="p-cart">
      <div class="p-cart__inner__ttl__box">
        <div class="p-cart__inner__ttl__line1 c-sub-ttl c-f14">
            <span class="p-cart__inner__ttl__char -first">・</span>
            <span class="p-cart__inner__ttl__char -first">c</span>
            <span class="p-cart__inner__ttl__char -first">a</span>
            <span class="p-cart__inner__ttl__char -first">r</span>
            <span class="p-cart__inner__ttl__char -first">t</span>
        </div>

        <div class="p-cart__inner__ttl__line2 c-font-fm">
            <span class="p-cart__inner__ttl__char -second c-red c-circle">カ</span>
            <span class="p-cart__inner__ttl__char -second">ー</span>
            <span class="p-cart__inner__ttl__char -second">ト</span>
        </div>
      </div>
      <div class="p-cart__link__box">
        <a href="#" class="p-cart__next__link">お買い物を続ける</a>
      </div>

      <div class="p-cart__list__item__all">
        <div class="p-cart__list__item__all__dec__box">
          <div class="p-cart__list__item__all__dec__left">
            <img src="<?php echo get_theme_file_uri() ?>/img/single-product3.png" alt="" class="p-cart__all__img">
            <div class="p-cart__list__item__all__txt__box">
              <h2 class="p-cart__list__item__all__ttl c-font-fm">個人印</h2>
              <p class="p-cart__list__item__all__txt">印材 : 牛の角（白）</p>
              <p class="p-cart__list__item__all__txt">サイズ : 15mm</p>
              <p class="p-cart__list__item__all__txt">刻印名 : 内田</p>
              <p class="p-cart__list__item__all__txt">書体 : <span class="c-red">選択してください</span></p>
            </div>
          </div>
          <div class="p-cart__list__item__all__dec__right">
            <p class="p-cart__list__item__all__dec__price">¥16,500</p>
            <div class="p-cart__list__item__all__dec__number__box">
              <p class="p-cart__list__item__all__dec__number">1</p>
              <img src="<?php echo get_theme_file_uri() ?>/img/triangle.svg" alt="" class="p-single-product__all__arrow__img">
            </div>
          </div>
        </div>

        <div class="p-cart__garbage__box">
          <img src="<?php echo get_theme_file_uri() ?>/img/garbage.svg" alt="" class="p-cart__garbage__img">
          <a href="#" class="p-cart__garbage__link">削除する</a>
        </div>

        <ul class="p-cart__price__list">
          <li class="p-cart__price__list__item">
            <p class="p-cart__price__list__item__left">商品合計</p>
            <p class="p-cart__price__list__item__right -first">¥16.500</p>
          </li>

          <li class="p-cart__price__list__item">
            <p class="p-cart__price__list__item__left">送料</p>
            <p class="p-cart__price__list__item__right">ご配送先入力後に計算されます</p>
          </li>

          <li class="p-cart__price__list__item">
            <p class="p-cart__price__list__item__left">合計</p>
            <p class="p-cart__price__list__item__right -last">¥18,000</p>
          </li>
        </ul>

        <a href="#" class="c-button4 -cart">
          <p class="p-cart__btn__txt">購入に進む</p>
        </a>
      </div>
    </article>
  </section>
</main><!-- l-main -->
<?php get_footer(); ?>
<?php get_template_part('wp-footer'); ?>


