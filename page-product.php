<?php get_header(); ?>
<?php get_template_part('nav'); ?>
<main id="l-main"><!-- l-main -->
  <div class="single-product__big__box">
    <section id="l-single-product">
      <article class="p-single-product">
        <div class="p-single-product__box">
          <ul class="p-single-product__img__list">
            <li class="p-single-product__img__list__item"><img src="<?php echo get_theme_file_uri() ?>/img/single-product2.png" class="p-single-product__img"></li>
            <li class="p-single-product__img__list__item"><img src="<?php echo get_theme_file_uri() ?>/img/single-product3.png" class="p-single-product__img"></li>
            <li class="p-single-product__img__list__item"><img src="<?php echo get_theme_file_uri() ?>/img/single-product4.png" class="p-single-product__img"></li>
            <li class="p-single-product__img__list__item"><img src="<?php echo get_theme_file_uri() ?>/img/single-product5.png" class="p-single-product__img"></li>
          </ul>
        </div>

        <div class="p-single-product__form__box">
          <div class="p-single-product__txt__box">
            <p class="p-single-product__subttl c-f14">預金口座を開設窓口で預金などに。</p>
            <h2 class="p-single-product__ttl c-font-fm"><span class="c-red">個</span>人印</h2>
            <div class="p-single-product__price__box">
              <p class="p-single-product__price"><span class="money -single-product">¥</span>8,000 ~ <span class="money -single-product">¥</span>40,000</p>
              <p class="p-single-product__price__dec">（税込）</p>
            </div>
              <p class="p-single-product__txt1 c-red">※ 印材・サイズを選択後、金額が確定されます。</p>
            <div class="p-single-product__limit__box">
              <p class="p-single-product__limit c-red">納期目安 : 30日</p>
            </div>
            <p class="p-single-product__dec">銀行印とは、その名のとおり銀行や信用金庫といった金融機関に対して届出を行ない、正式に登録された印鑑のことです。 おもに預金口座を開設したり、窓口で預金を引き出したりするとき、本人確認のために使用します。</p>
          </div> 

          <div class="p-single-product__form__list">
            <div class="p-single-product__form__list__item">
              <p class="p-single-product__form__list__item__name"><span class="c-red">・</span><span class="c-space">印材</p>
              <div class="p-single-product__form__list__item__dec__large__box">
                <div class="p-single-product__form__list__item__dec__left">
                  <img src="<?php echo get_theme_file_uri() ?>/img/single-product1.jpg" alt="" class="p-single-product__dec__img">
                  <div class="p-single-product__form__list__item__txt__box">
                    <p class="p-single-product__form__list__item__txt__type">牛角（白）</p>
                    <p class="p-single-product__form__list__item__txt__price">¥12,000~¥30,000</p>
                  </div>
                </div>
                <div class="p-single-product__form__list__item__dec__right">
                  <img src="<?php echo get_theme_file_uri() ?>/img/triangle.svg" alt="" class="p-single-product__arrow__img">
                </div>
              </div>
            </div>

            <div class="p-single-product__form__list__item">
              <div class="p-single-product__form__list__item__name__box">
                <div class="p-single-product__form__list__item__name__left">
                  <p class="p-single-product__form__list__item__name"><span class="c-red">・</span><span class="c-space">サイズ</p>
                </div>
                <div class="p-single-product__form__list__item__name__right">
                  <p class="p-single-product__form__list__item__name__txt">サイズガイド</p>
                  <img src="<?php echo get_theme_file_uri() ?>/img/square.svg" alt="" class="p-single-product__form__list__item__name__img">
                </div>
              </div>
              <div class="p-single-product__form__list__item__dec__box">
                <div class="p-single-product__form__list__item__dec__left">
                    <p class="p-single-product__form__list__item__txt">15mm（実印におすすめのサイズ）</p>
                </div>
                <div class="p-single-product__form__list__item__dec__right">
                  <img src="<?php echo get_theme_file_uri() ?>/img/triangle.svg" alt="" class="p-single-product__arrow__img">
                </div>
              </div>
            </div>

            <div class="p-single-product__form__list__item">
              <p class="p-single-product__form__list__item__name"><span class="c-red">・</span><span class="c-space">刻印名</p>
              <input type="text" placeholder="例）椿山" class="p-single-product__form__list__item__input">
            </div>

            <div class="p-single-product__form__list__item">
              <div class="p-single-product__form__list__item__name__box">
                <div class="p-single-product__form__list__item__name__left">
                  <p class="p-single-product__form__list__item__name"><span class="c-red">・</span><span class="c-space">書体</p>
                </div>
                <div class="p-single-product__form__list__item__name__right">
                  <p class="p-single-product__form__list__item__name__txt">書体ガイド</p>
                  <img src="<?php echo get_theme_file_uri() ?>/img/square.svg" alt="" class="p-single-product__form__list__item__name__img">
                </div>
              </div>
              <div class="p-single-product__form__list__item__dec__box">
                <div class="p-single-product__form__list__item__dec__left">
                    <p class="p-single-product__form__list__item__txt">篆書体</p>
                </div>
                <div class="p-single-product__form__list__item__dec__right">
                  <img src="<?php echo get_theme_file_uri() ?>/img/triangle.svg" alt="" class="p-single-product__arrow__img">
                </div>
              </div>

              <div class="p-single-product__form__list__item__checkbox__box">
                <input type="checkbox" class="p-single-product__form__list__item__checkbox">
                <label class="p-single-product__form__list__item__checkbox__label">
                  <input class="p-single-product__form__list__item__checkbox" type="checkbox"><span class="p-single-product__form__list__item__checkbox__dummy"></span>
                </label>
                <p class="p-single-product__form__list__item__checkbox__txt">実際の書体イメージの確認を希望する<br>※メールまたはLINEにてお送りします</p>
              </div>
            </div>

            <div class="p-single-product__form__list__item">
              <p class="p-single-product__form__list__item__name"><span class="c-red">・</span><span class="c-space">備考</p>
              <p class="p-single-product__form__list__item__dec">旧字体などのご指定がある場合はこちらへご記入ください</p>
              <textarea placeholder="例） ぶりぶり" rows="10" class="p-single-product__form__list__item__textarea"></textarea>
            </div>

          </div>

          <div class="p-single-product__form__list__item__all">
            <div class="p-single-product__form__list__item__all__dec__box">
              <div class="p-single-product__form__list__item__all__dec__left">
                <img src="<?php echo get_theme_file_uri() ?>/img/single-product3.png" alt="" class="p-single-product__all__img">
                <div class="p-single-product__form__list__item__all__txt__box">
                  <h2 class="p-single-product__form__list__item__all__ttl">個人印</h2>
                  <p class="p-single-product__form__list__item__all__txt">印材 : 牛の角（白）</p>
                  <p class="p-single-product__form__list__item__all__txt">サイズ : 15mm</p>
                  <p class="p-single-product__form__list__item__all__txt">刻印名 : 内田</p>
                  <p class="p-single-product__form__list__item__all__txt">書体 : <span class="c-red">選択してください</span></p>
                </div>
              </div>
              <div class="p-single-product__form__list__item__all__dec__right">
                <p class="p-single-product__form__list__item__all__dec__price">¥16,500</p>
                <div class="p-single-product__form__list__item__all__dec__number__box">
                  <p class="p-single-product__form__list__item__all__dec__number">1</p>
                  <img src="<?php echo get_theme_file_uri() ?>/img/triangle.svg" alt="" class="p-single-product__all__arrow__img">
                </div>
              </div>
            </div>

            <a href="<?php echo home_url('/cart'); ?>" class="c-button4 -single-product">
              <img src="<?php echo get_theme_file_uri() ?>/img/bag.svg" alt="" class="p-single-product__btn__img">
              <p class="p-single-product__btn__txt">カートはこちら</p>
            </a>
          </div>
        </div>
      </article>
    </section>

    <section id="l-recommend">
        <div class="p-recommend__inner__ttl__box">
        <div class="p-recommend__inner__ttl__line1 c-sub-ttl c-f14">
            <span class="p-recommend__inner__ttl__char -first">・</span>
            <span class="p-recommend__inner__ttl__char -first">r</span>
            <span class="p-recommend__inner__ttl__char -first">e</span>
            <span class="p-recommend__inner__ttl__char -first">c</span>
            <span class="p-recommend__inner__ttl__char -first">o</span>
            <span class="p-recommend__inner__ttl__char -first">m</span>
            <span class="p-recommend__inner__ttl__char -first">m</span>
            <span class="p-recommend__inner__ttl__char -first">e</span>
            <span class="p-recommend__inner__ttl__char -first">n</span>
            <span class="p-recommend__inner__ttl__char -first">d</span>
          </div>

          <div class="p-recommend__inner__ttl__line2 c-font-fm">
            <span class="p-recommend__inner__ttl__char -second c-red c-circle">注</span>
            <span class="p-recommend__inner__ttl__char -second">目</span>
            <span class="p-recommend__inner__ttl__char -second">の</span>
            <span class="p-recommend__inner__ttl__char -second">商</span>
            <span class="p-recommend__inner__ttl__char -second">品</span>
          </div>
        </div>
        <div class="swiper swiper-recommend">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="p-recommend__box">
                <div class="p-recommend__list__img__box">
                  <img src="<?php echo get_theme_file_uri() ?>/img/hanko_tya_shingle.jpg" class="p-recommend__list__img">
                </div>

                <div class="p-recommend__list__txt__box">
                  <p class="p-recommend__img__suv__ttl c-sub-ttl c-f14">預金口座を開設窓口で預金などに。</p>
                  <h2 class="p-recommend__img__ttl c-font-fm">個人印</h2>
                  <div class="p-recommend__tags">
                    <p class="p-recommend__tag c-f14">牛角（白）</p>
                    <p class="p-recommend__tag c-f14">15cm</p>
                  </div>
                  <div class="p-recommend__price__box">
                    <p class="p-recommend__price"><span class="money">¥</span>32,000</p>
                    <p class="p-recommend__price__dec">（税込）</p>
                  </div>
                  <a href="#" class="c-button -recommend">
                    <p class="c-button__txt c-f14">購入はこちら</p>
                    <img src="<?php echo get_theme_file_uri() ?>/img/btn-arrow.png" alt="" class="p-recommend__img">
                  </a>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="p-recommend__box">
                <div class="p-recommend__list__img__box">
                  <img src="<?php echo get_theme_file_uri() ?>/img/hanko_tya_shingle.jpg" class="p-recommend__list__img">
                </div>

                <div class="p-recommend__list__txt__box">
                  <p class="p-recommend__img__suv__ttl c-sub-ttl c-f14">預金口座を開設窓口で預金などに。</p>
                  <h2 class="p-recommend__img__ttl c-font-fm">個人印</h2>
                  <div class="p-recommend__tags">
                    <p class="p-recommend__tag c-f14">牛角（白）</p>
                    <p class="p-recommend__tag c-f14">15cm</p>
                  </div>
                  <div class="p-recommend__price__box">
                    <p class="p-recommend__price"><span class="money">¥</span>32,000</p>
                    <p class="p-recommend__price__dec">（税込）</p>
                  </div>
                  <a href="#" class="c-button -recommend">
                    <p class="c-button__txt c-f14">購入はこちら</p>
                    <img src="<?php echo get_theme_file_uri() ?>/img/btn-arrow.png" alt="" class="p-recommend__img">
                  </a>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="p-recommend__box">
                <div class="p-recommend__list__img__box">
                  <img src="<?php echo get_theme_file_uri() ?>/img/hanko_tya_shingle.jpg" class="p-recommend__list__img">
                </div>

                <div class="p-recommend__list__txt__box">
                  <p class="p-recommend__img__suv__ttl c-sub-ttl c-f14">預金口座を開設窓口で預金などに。</p>
                  <h2 class="p-recommend__img__ttl c-font-fm">個人印</h2>
                  <div class="p-recommend__tags">
                    <p class="p-recommend__tag c-f14">牛角（白）</p>
                    <p class="p-recommend__tag c-f14">15cm</p>
                  </div>
                  <div class="p-recommend__price__box">
                    <p class="p-recommend__price"><span class="money">¥</span>32,000</p>
                    <p class="p-recommend__price__dec">（税込）</p>
                  </div>
                  <a href="#" class="c-button -recommend">
                    <p class="c-button__txt c-f14">購入はこちら</p>
                    <img src="<?php echo get_theme_file_uri() ?>/img/btn-arrow.png" alt="" class="p-recommend__img">
                  </a>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination swiper-recommend-pagination"></div>
    </section>

    <section class="l-gift-set">

        <article class="p-gift-set__box">
            <div class="p-gift-set__ttl__box">
              <div class="p-gift-set__inner__ttl">
                <div class="p-gift-set__inner__ttl__line1 c-sub-ttl c-f14">
                  <span class="p-gift-set__inner__ttl__char -first">・</span>
                  <span class="p-gift-set__inner__ttl__char -first">g</span>
                  <span class="p-gift-set__inner__ttl__char -first">i</span>
                  <span class="p-gift-set__inner__ttl__char -first">f</span>
                  <span class="p-gift-set__inner__ttl__char -first">t</span>
                  <span class="p-gift-set__inner__ttl__char -first">s</span>
                  <span class="p-gift-set__inner__ttl__char -first">e</span>
                  <span class="p-gift-set__inner__ttl__char -first">t</span>
                </div>
                <div class="p-gift-set__inner__ttl__line2 c-font-fm">
                  <span class="p-gift-set__inner__ttl__char -second c-red c-circle">ギ</span>
                  <span class="p-gift-set__inner__ttl__char -second">フ</span>
                  <span class="p-gift-set__inner__ttl__char -second">ト</span>
                  <span class="p-gift-set__inner__ttl__char -second">セ</span>
                  <span class="p-gift-set__inner__ttl__char -second">ッ</span>
                  <span class="p-gift-set__inner__ttl__char -second">ト</span>
                </div>
              </div>

              <div class="p-gift-set__inner__sub__ttl c-dec">
                <div class="p-gift-set__inner__sub__ttl__line1">
                  <span class="p-gift-set__inner__sub__ttl__char -first">大</span>
                  <span class="p-gift-set__inner__sub__ttl__char -first">切</span>
                  <span class="p-gift-set__inner__sub__ttl__char -first">な</span>
                  <span class="p-gift-set__inner__sub__ttl__char -first">日</span>
                  <span class="p-gift-set__inner__sub__ttl__char -first">に</span>
                  <span class="p-gift-set__inner__sub__ttl__char -first">、</span>
                </div>

                <div class="p-gift-set__inner__sub__ttl__line2">
                  <span class="p-gift-set__inner__sub__ttl__char -second">大</span>
                  <span class="p-gift-set__inner__sub__ttl__char -second">切</span>
                  <span class="p-gift-set__inner__sub__ttl__char -second">な</span>
                  <span class="p-gift-set__inner__sub__ttl__char -second">方</span>
                  <span class="p-gift-set__inner__sub__ttl__char -second">へ</span>
                  <span class="p-gift-set__inner__sub__ttl__char -second">、</span>
                </div>

                <div class="p-gift-set__inner__sub__ttl__line3">
                  <span class="p-gift-set__inner__sub__ttl__char -third">は</span>
                  <span class="p-gift-set__inner__sub__ttl__char -third">ん</span>
                  <span class="p-gift-set__inner__sub__ttl__char -third">こ</span>
                  <span class="p-gift-set__inner__sub__ttl__char -third">の</span>
                  <span class="p-gift-set__inner__sub__ttl__char -third">贈</span>
                  <span class="p-gift-set__inner__sub__ttl__char -third">り</span>
                  <span class="p-gift-set__inner__sub__ttl__char -third">物</span>
                  <span class="p-gift-set__inner__sub__ttl__char -third">を</span>
                  <span class="p-gift-set__inner__sub__ttl__char -third">。</span>
                </div>
              </div>
            </div>

            <div class="p-gift-set__img__box">
              <div class="p-gift-set__img__box__wid">
              <img src="<?php echo get_theme_file_uri() ?>/img/gift.png" alt="" class="p-gift-set__img">
                <p class="p-gift-set__txt c-dec">個人印とは、その名のとおり銀行や信用金庫といった金融機関に対して届出を行ない、正式に登録された印鑑のことです。 </p>
                <a href="#" class="c-button -gift-set">
                  <p class="c-button__txt c-f14">購入はこちら</p>
                  <img src="<?php echo get_theme_file_uri() ?>/img/btn-arrow.png" alt="" class="p-product__img3">
                </a>
              </div>
            </div>
        </article>
    </section>
  </div>
</main><!-- l-main -->

    
<?php get_footer(); ?>
<?php get_template_part('wp-footer'); ?>


