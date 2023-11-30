<?php get_header(); ?>
<?php get_template_part('nav'); ?>

<!-- <div class="p-subnav__line-btn">
  <a href="https://lin.ee/NIHpv5g" class="p-subnav__line-btn__link">
    <img src="<?php echo get_theme_file_uri() ?>/img/line-btn-sp.png" alt="" class="p-subnav__line-btn__img">
  </a>
</div> -->

<!-- main-visual-->

  <div class="p-kv__box">
    <article id="kv" class="p-kv">
      <div class="p-kv__inner__ttl">
        <div class="p-kv__inner__ttl__line1 c-font-fm">
          <span class="p-kv__inner__ttl__char -first">お</span>
          <span class="p-kv__inner__ttl__char -first">客</span>
          <span class="p-kv__inner__ttl__char -first">様</span>
          <span class="p-kv__inner__ttl__char -first">に</span>
          <span class="p-kv__inner__ttl__char -first">と</span>
          <span class="p-kv__inner__ttl__char -first"> っ</span>
          <span class="p-kv__inner__ttl__char -first">て</span>
          <span class="p-kv__inner__ttl__char -first symbol">、</span>
        </div>

        <div class="p-kv__inner__ttl__line2 c-font-fm">
          <span class="p-kv__inner__ttl__char -second">最</span>
          <span class="p-kv__inner__ttl__char -second c-red c-circle">適</span>
          <span class="p-kv__inner__ttl__char -second">な</span>
          <span class="p-kv__inner__ttl__char -second">一</span>
          <span class="p-kv__inner__ttl__char -second">本</span>
          <span class="p-kv__inner__ttl__char -second">を</span>
          <span class="p-kv__inner__ttl__char -second symbol">。</span>
        </div>
      </div>

      <div class="p-kv__img__box">
        <div class="swiper kv">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
              <!-- Slides -->
            <div class="swiper-slide -top"><img src="<?php echo get_theme_file_uri() ?>/img/mv_01.jpg" alt="" class="p-kv__img"></div>
            <div class="swiper-slide -middle"><img src="<?php echo get_theme_file_uri() ?>/img/mv_02.jpg" alt="" class="p-kv__img"></div>
            <div class="swiper-slide -last"><img src="<?php echo get_theme_file_uri() ?>/img/mv_03.jpg" alt="" class="p-kv__img"></div>
          </div>
        </div>
      </div>
      <!-- 必要に応じてページネーション -->
        <div class="swiper-pagination swiper-kv"></div>


      <div class="p-kv__news">
        <h2 class="p-kv__news__ttl">・news</h2>
        <?php
        $args = array(
          'post_type'      => 'post',
          'order'          => 'DESC',
          'orderby'        => 'post_date',
          'post_status' => 'publish',
          'posts_per_page' => 1,
        );
        $news_box = new WP_Query($args);
        if ($news_box->have_posts()) : while ($news_box->have_posts()) : $news_box->the_post();
        ?>
        <div class="p-kv__news__list">
          <div class="p-kv__news__list__inner">
            <ul class="p-kv__news__list__title">
              <li class="p-kv__news__list__dec c-dec">&nbsp;<?php echo get_the_date('Y.m.d'); ?>&nbsp;<?php echo get_the_title(); ?></li>
              <li class="p-kv__news__list__dec c-dec">&nbsp;<?php echo get_the_date('Y.m.d'); ?>&nbsp;<?php echo get_the_title(); ?></li>
            </ul>
          </div>
          <div class="p-kv__news__list__btn"><a href="<?php echo home_url('/news'); ?>" class="p-kv__news__btn__link"><img src="<?php echo get_theme_file_uri() ?>/img/arrow2.svg" class="p-kv__news__arrow" alt=""></a></div>
        </div>
        <?php
        endwhile;
      endif;
      wp_reset_postdata();
      ?>
      </div>
    </article>
  </div>

 <main class="l-main"> <!-- l-main -->
 <div class="p-scroll__sticky__box">
    <div class="p-scroll__img__box">
      <img src="<?php echo get_theme_file_uri() ?>/img/hanko_scroll.png" alt="" >
    </div>
  </div>

  <section id="l-intro">
    <div class="p-intro-flex">
      <article class="p-intro__inner__ttl">
        <div class="p-intro__inner__ttl__line1 c-sub-ttl c-f14">
            <span class="p-intro__inner__ttl__char -first">・</span>
            <span class="p-intro__inner__ttl__char -first">i</span>
            <span class="p-intro__inner__ttl__char -first">n</span>
            <span class="p-intro__inner__ttl__char -first">t</span>
            <span class="p-intro__inner__ttl__char -first">r</span>
            <span class="p-intro__inner__ttl__char -first">o</span>
            <span class="p-intro__inner__ttl__char -first">d</span>
            <span class="p-intro__inner__ttl__char -first">u</span>
            <span class="p-intro__inner__ttl__char -first">c</span>
            <span class="p-intro__inner__ttl__char -first">t</span>
            <span class="p-intro__inner__ttl__char -first">i</span>
            <span class="p-intro__inner__ttl__char -first">o</span>
            <span class="p-intro__inner__ttl__char -first">n</span>
          </div>
          <div class="p-intro__inner__ttl__line2 c-font-fm">
            <span class="p-intro__inner__ttl__char -second">お</span>
            <span class="p-intro__inner__ttl__char -second">客</span>
            <span class="p-intro__inner__ttl__char -second">様</span>
            <span class="p-intro__inner__ttl__char -second">に</span>
            <span class="p-intro__inner__ttl__char -second">と</span>
            <span class="p-intro__inner__ttl__char -second"> っ</span>
            <span class="p-intro__inner__ttl__char -second">て</span>
          </div>

          <div class="p-intro__inner__ttl__line3 c-font-fm">
            <span class="p-intro__inner__ttl__char -third">最</span>
            <span class="p-intro__inner__ttl__char -third">適</span>
            <span class="p-intro__inner__ttl__char -third">な</span>
            <span class="p-intro__inner__ttl__char -third">一</span>
            <span class="p-intro__inner__ttl__char -third">本</span>
            <span class="p-intro__inner__ttl__char -third">を</span>
          </div>
      </article>

      <article class="p-intro__dec">
        <div class="p-intro__dec__list">
          <p class="p-intro__dec__list__item__01 c-dec">
            <span class="first-red"></span>印章専門店椿山は、手彫りにこだわるはんこの専門店です。<br>
            唯一無二だからこそ、価値のあるはんこを丁寧に彫刻いたします
          </p>
          <p class="p-intro__dec__list__item__02 c-dec">
            当店では、はんこを一生使っていただける彫り物として提案しております。<br>はんこは責任を形にしたもの。<br>
            お子様の成人のタイミング、責任ある一人前の大人になったというメッセージと共にはんこを贈るのはいかがでしょうか？
          </p>
        </div>

        <div class="p-intro__btn__box">
          <a href="<?php echo home_url('/about'); ?>" class="c-button2 c-f14">

            <p>椿山について</p>
          </a>
      </div>
      </article>
    </div>
  </section>

  <div class="swiper-container">
    <!-- Sliderを包むコンテナ要素 -->
    <div class="swiper infinite-swiper">
      <!-- スライド要素を包む要素 -->
      <div class="swiper-wrapper">
        <!-- 各スライド -->
        <div class="swiper-slide"><img src="<?php echo get_theme_file_uri() ?>/img/swiper_01.jpg" alt="" ></div>
        <div class="swiper-slide"><img src="<?php echo get_theme_file_uri() ?>/img/swiper_02.jpg" alt="" ></div>
        <div class="swiper-slide"><img src="<?php echo get_theme_file_uri() ?>/img/swiper_03.jpg" alt="" ></div>
        <div class="swiper-slide"><img src="<?php echo get_theme_file_uri() ?>/img/swiper_04.jpg" alt="" ></div>
        <div class="swiper-slide"><img src="<?php echo get_theme_file_uri() ?>/img/swiper_01.jpg" alt="" ></div>
        <div class="swiper-slide"><img src="<?php echo get_theme_file_uri() ?>/img/swiper_02.jpg" alt="" ></div>
        <div class="swiper-slide"><img src="<?php echo get_theme_file_uri() ?>/img/swiper_03.jpg" alt="" ></div>
        <div class="swiper-slide"><img src="<?php echo get_theme_file_uri() ?>/img/swiper_04.jpg" alt="" ></div>
      </div>
    </div>
  </div>

  <section id="l-product">
    <div class="p-product__inner__box">
      <article class="p-product__inner__ttl">
        <div class="p-product__inner__ttl__line1 c-sub-ttl c-f14">
            <span class="p-product__inner__ttl__char -first">・</span>
            <span class="p-product__inner__ttl__char -first">p</span>
            <span class="p-product__inner__ttl__char -first">r</span>
            <span class="p-product__inner__ttl__char -first">o</span>
            <span class="p-product__inner__ttl__char -first">d</span>
            <span class="p-product__inner__ttl__char -first">u</span>
            <span class="p-product__inner__ttl__char -first">c</span>
            <span class="p-product__inner__ttl__char -first">t</span>
          </div>
          <div class="p-product__inner__ttl__line2 c-font-fm">
            <span class="p-product__inner__ttl__char -second c-red c-circle">商</span>
            <span class="p-product__inner__ttl__char -second">品</span>
            <span class="p-product__inner__ttl__char -second">一</span>
            <span class="p-product__inner__ttl__char -second">覧</span>
          </div>
      </article>
    
      <article class="p-product__inner__sub__ttl c-dec">
        <div class="p-product__inner__sub__ttl__line1">
          <span class="p-product__inner__sub__ttl__char -first">個</span>
          <span class="p-product__inner__sub__ttl__char -first">人</span>
          <span class="p-product__inner__sub__ttl__char -first">用</span>
          <span class="p-product__inner__sub__ttl__char -first">の</span>
          <span class="p-product__inner__sub__ttl__char -first">銀</span>
          <span class="p-product__inner__sub__ttl__char -first">行</span>
          <span class="p-product__inner__sub__ttl__char -first">印</span>
          <span class="p-product__inner__sub__ttl__char -first">・</span>
        </div>

        <div class="p-product__inner__sub__ttl__line2">
          <span class="p-product__inner__sub__ttl__char -second">認</span>
          <span class="p-product__inner__sub__ttl__char -second">印</span>
          <span class="p-product__inner__sub__ttl__char -second">を</span>
          <span class="p-product__inner__sub__ttl__char -second">オ</span>
          <span class="p-product__inner__sub__ttl__char -second">ン</span>
          <span class="p-product__inner__sub__ttl__char -second">ラ</span>
          <span class="p-product__inner__sub__ttl__char -second">イ</span>
          <span class="p-product__inner__sub__ttl__char -second">ン</span>
          <span class="p-product__inner__sub__ttl__char -second">で</span>
        </div>

        <div class="p-product__inner__sub__ttl__line3">
          <span class="p-product__inner__sub__ttl__char -third">お</span>
          <span class="p-product__inner__sub__ttl__char -third">求</span>
          <span class="p-product__inner__sub__ttl__char -third">め</span>
          <span class="p-product__inner__sub__ttl__char -third">い</span>
          <span class="p-product__inner__sub__ttl__char -third">た</span>
          <span class="p-product__inner__sub__ttl__char -third">だ</span>
          <span class="p-product__inner__sub__ttl__char -third">け</span>
          <span class="p-product__inner__sub__ttl__char -third">ま</span>
          <span class="p-product__inner__sub__ttl__char -third">す</span>
        </div>
      </article>
    </div>

      <article class="p-product__list">

        <div class="p-product__list__item">
          <div class="p-product__img__box">
            <img src="<?php echo get_theme_file_uri() ?>/img/pro-img1.jpg" alt="" class="p-product__img1">
            <img src="<?php echo get_theme_file_uri() ?>/img/hanko_black.png" alt="" class="p-product__img2 -black">
            <p class="p-product__img__suv__ttl c-sub-ttl c-f14">預金口座を開設窓口で預金などに。</p>
            <h2 class="p-product__img__ttl c-font-fm">個人印</h2>
          </div>
          <div class="p-product__txt__box">
            <p class="p-product__txt c-dec">実印とは、市区町村に登録したハンコのことです。 居住する市区町村に届け出をすることで、実印を作成することができます。</p>
            <a href="<?php echo home_url('/product'); ?>" class="c-button -product">
              <p class="c-button__txt c-f14">購入はこちら</p>
              <img src="<?php echo get_theme_file_uri() ?>/img/btn-arrow.png" alt="" class="p-product__img3">
            </a>
          </div>
        </div>

        <div class="p-product__list__item">
          <div class="p-product__img__box">
            <img src="<?php echo get_theme_file_uri() ?>/img/pro-img2.jpg" alt="" class="p-product__img1">
            <img src="<?php echo get_theme_file_uri() ?>/img/hanko_tya.png" alt="" class="p-product__img2 -tya">
            <p class="p-product__img__suv__ttl c-sub-ttl c-f14">預金口座を開設窓口で預金などに。</p>
            <h2 class="p-product__img__ttl c-font-fm">法人印</h2>
          </div>
          <div class="p-product__txt__box">
            <p class="p-product__txt c-dec">実印とは、市区町村に登録したハンコのことです。 居住する市区町村に届け出をすることで、実印を作成することができます。</p>
            <a href="<?php echo home_url('/product'); ?>" class="c-button -product">
              <p class="c-button__txt c-f14">購入はこちら</p>
              <img src="<?php echo get_theme_file_uri() ?>/img/btn-arrow.png" alt="" class="p-product__img3">
            </a>
          </div>
        </div>

      </article>
      
  </section>

  <section id="l-set">
    <div class="p-set__inner__box">
      <article class="p-set__inner__ttl">
        <div class="p-set__inner__ttl__line1 c-sub-ttl c-f14">
            <span class="p-set__inner__ttl__char -first">・</span>
            <span class="p-set__inner__ttl__char -first">s</span>
            <span class="p-set__inner__ttl__char -first">e</span>
            <span class="p-set__inner__ttl__char -first">t</span>
          </div>
          <div class="p-set__inner__ttl__line2 c-font-fm">
            <span class="p-set__inner__ttl__char -second c-red c-circle">セ</span>
            <span class="p-set__inner__ttl__char -second">ッ</span>
            <span class="p-set__inner__ttl__char -second">ト</span>
            <span class="p-set__inner__ttl__char -second">商</span>
            <span class="p-set__inner__ttl__char -second">品</span>
          </div>
      </article>
    </div>

      <article class="p-set__list">

        <div class="p-set__list__item1">
          <div class="p-set__img__box">
            <p class="p-set__img__suv__ttl-1 c-sub-ttl c-f14">預金口座を開設窓口で預金などに。</p>
            <h2 class="p-set__img__ttl c-font-fm">個人印2本セット</h2>
            <img src="<?php echo get_theme_file_uri() ?>/img/hanko_black_double.png" alt="" class="p-set__img">
          </div>
          <div class="p-set__btn__box">
            <a href="<?php echo home_url('/about'); ?>" class="c-button2 -set c-f14">
              <p>サイズ選択へ</p>
            </a>
          </div>
        </div>

        <div class="p-set__list__item2">
          <div class="p-set__img__box">
            <p class="p-set__img__suv__ttl-2 c-sub-ttl c-f14">預金口座を開設窓口で預金などに。</p>
            <h2 class="p-set__img__ttl c-font-fm">法人印2本セット</h2>
            <img src="<?php echo get_theme_file_uri() ?>/img/hanko_tya_double.jpg" alt="" class="p-set__img">
          </div>
          <div class="p-set__btn__box">
            <a href="<?php echo home_url('/about'); ?>" class="c-button2 -set c-f14">
              <p>サイズ選択へ</p>
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
      <div class="swiper-button-next -recommend"></div>
      <div class="swiper-button-prev -recommend"></div>
      <div class="swiper-pagination swiper-recommend-pagination -recommend"></div>
  </section>

  <section class="l-gift-set">

    <article class="p-gift-set__box">
        <div class="p-gift-set__ttl__box">
          <div class="p-gift-set__inner__ttl">
            <div class="p-gift-set__inner__ttl__line1 c-sub-ttl">
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

          <div class="p-gift-set__inner__sub__ttl c-font-fm">
            <div class="p-gift-set__inner__sub__ttl__line1">
              <span class="p-gift-set__inner__sub__ttl__char -first">大</span>
              <span class="p-gift-set__inner__sub__ttl__char -first">切</span>
              <span class="p-gift-set__inner__sub__ttl__char -first">な</span>
              <span class="p-gift-set__inner__sub__ttl__char -first">日</span>
              <span class="p-gift-set__inner__sub__ttl__char -first">に</span>
              <span class="p-gift-set__inner__sub__ttl__char -first symbol min">、</span>
            </div>

            <div class="p-gift-set__inner__sub__ttl__line2">
              <span class="p-gift-set__inner__sub__ttl__char -second">大</span>
              <span class="p-gift-set__inner__sub__ttl__char -second">切</span>
              <span class="p-gift-set__inner__sub__ttl__char -second">な</span>
              <span class="p-gift-set__inner__sub__ttl__char -second">方</span>
              <span class="p-gift-set__inner__sub__ttl__char -second">へ</span>
              <span class="p-gift-set__inner__sub__ttl__char -second symbol min">、</span>
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
              <span class="p-gift-set__inner__sub__ttl__char -third symbol min">。</span>
            </div>
          </div>
        </div>

        <div class="p-gift-set__img__box">
          <div class="p-gift-set__img__box__wid">
          <img src="<?php echo get_theme_file_uri() ?>/img/gift.png" alt="" class="p-gift-set__img">
            <p class="p-gift-set__txt">個人印とは、その名のとおり銀行や信用金庫といった金融機関に対して届出を行ない、正式に登録された印鑑のことです。 </p>
            <a href="#" class="c-button -gift-set">
              <p class="c-button__txt c-f14">購入はこちら</p>
              <img src="<?php echo get_theme_file_uri() ?>/img/btn-arrow.png" alt="" class="p-product__img3">
            </a>
          </div>
        </div>
    </article>
  </section>

  <section class="l-news">
    <article class="p-news">
      <div class="p-news__inner__ttl__line1 c-sub-ttl">
        <span class="p-news__inner__ttl__char -first">・</span>
        <span class="p-news__inner__ttl__char -first">n</span>
        <span class="p-news__inner__ttl__char -first">e</span>
        <span class="p-news__inner__ttl__char -first">w</span>
        <span class="p-news__inner__ttl__char -first">s</span>
      </div>

      <div class="p-news__inner__ttl__line2 c-font-fm">
        <span class="p-news__inner__ttl__char -second c-red c-circle">お</span>
        <span class="p-news__inner__ttl__char -second">知</span>
        <span class="p-news__inner__ttl__char -second">ら</span>
        <span class="p-news__inner__ttl__char -second">せ</span>
      </div>

      <ul class="p-news__list">
        <li class="p-news__list__item">
          <a href="#" class="p-news__link">
            <img src="<?php echo get_theme_file_uri() ?>/img/tsubakiyama_logo.png" alt="" class="p-news__list__img">
            <div class="p-news__list__txt__box">
              <div class="p-news__list__tags">
                <p class="p-news__list__date">2023.03.31</p>
                <p class="p-news__list__tag">お知らせ</p>
              </div>
              <p class="p-news__list__dec">新しいお知らせをお伝えします。</p>
            </div>
          </a>
        </li>

        <li class="p-news__list__item">
          <a href="#" class="p-news__link">
            <img src="<?php echo get_theme_file_uri() ?>/img/tsubakiyama_logo.png" alt="" class="p-news__list__img">
            <div class="p-news__list__txt__box">
              <div class="p-news__list__tags">
                <p class="p-news__list__date">2023.03.31</p>
                <p class="p-news__list__tag">お知らせ</p>
              </div>
              <p class="p-news__list__dec">新しいお知らせをお伝えします。</p>
            </div>
          </a>
        </li>

        <li class="p-news__list__item">
          <a href="#" class="p-news__link">
            <img src="<?php echo get_theme_file_uri() ?>/img/tsubakiyama_logo.png" alt="" class="p-news__list__img">
            <div class="p-news__list__txt__box">
              <div class="p-news__list__tags">
                <p class="p-news__list__date">2023.03.31</p>
                <p class="p-news__list__tag">お知らせ</p>
              </div>
              <p class="p-news__list__dec">新しいお知らせをお伝えします。</p>
            </div>
          </a>
        </li>
      </ul>

      <div class="p-news__btn__box">
      <a href="<?php echo home_url('/news'); ?>" class="c-button2 -news c-f14">
        <p>もっと見る</p>
      </a>
      </div>
    </article>
  </section>

  <section class="l-sns">
    <div class="p-sns">
      <article class="p-insta">
        <div class="p-insta__inner__ttl__line1 c-sub-ttl c-f14">
          <span class="p-insta__inner__ttl__char -first">・</span>
          <span class="p-insta__inner__ttl__char -first">I</span>
          <span class="p-insta__inner__ttl__char -first">n</span>
          <span class="p-insta__inner__ttl__char -first">s</span>
          <span class="p-insta__inner__ttl__char -first">t</span>
          <span class="p-insta__inner__ttl__char -first">a</span>
          <span class="p-insta__inner__ttl__char -first">g</span>
          <span class="p-insta__inner__ttl__char -first">r</span>
          <span class="p-insta__inner__ttl__char -first">a</span>
          <span class="p-insta__inner__ttl__char -first">m</span>
        </div>

        <div class="p-insta__inner__ttl__line2 c-font-fm">
          <span class="p-insta__inner__ttl__char -second c-red c-circle">イ</span>
          <span class="p-insta__inner__ttl__char -second">ン</span>
          <span class="p-insta__inner__ttl__char -second">ス</span>
          <span class="p-insta__inner__ttl__char -second">タ</span>
          <span class="p-insta__inner__ttl__char -second">グ</span>
          <span class="p-insta__inner__ttl__char -second">ラ</span>
          <span class="p-insta__inner__ttl__char -second">ム</span>
        </div>

        <ul class="p-insta__list">
          <li class="p-insta__list__item"><a href="https://instagram.com/insho_tsubakiyama?igshid=NTc4MTIwNjQ2YQ==" class="p-insta__link"><img src="<?php echo get_theme_file_uri() ?>/img/insta01.png" alt="" class="p-insta__list__img"></a></li>
          <li class="p-insta__list__item"><a href="https://instagram.com/insho_tsubakiyama?igshid=NTc4MTIwNjQ2YQ==" class="p-insta__link"><img src="<?php echo get_theme_file_uri() ?>/img/insta02.png" alt="" class="p-insta__list__img"></a></li>
          <li class="p-insta__list__item"><a href="https://instagram.com/insho_tsubakiyama?igshid=NTc4MTIwNjQ2YQ==" class="p-insta__link"><img src="<?php echo get_theme_file_uri() ?>/img/insta03.png" alt="" class="p-insta__list__img"></a></li>
          <li class="p-insta__list__item"><a href="https://instagram.com/insho_tsubakiyama?igshid=NTc4MTIwNjQ2YQ==" class="p-insta__link"><img src="<?php echo get_theme_file_uri() ?>/img/insta04.png" alt="" class="p-insta__list__img"></a></li>
          <li class="p-insta__list__item"><a href="https://instagram.com/insho_tsubakiyama?igshid=NTc4MTIwNjQ2YQ==" class="p-insta__link"><img src="<?php echo get_theme_file_uri() ?>/img/insta05.png" alt="" class="p-insta__list__img"></a></li>
          <li class="p-insta__list__item"><a href="https://instagram.com/insho_tsubakiyama?igshid=NTc4MTIwNjQ2YQ==" class="p-insta__link"><img src="<?php echo get_theme_file_uri() ?>/img/insta06.png" alt="" class="p-insta__list__img"></a></li>
          <li class="p-insta__list__item"><a href="https://instagram.com/insho_tsubakiyama?igshid=NTc4MTIwNjQ2YQ==" class="p-insta__link"><img src="<?php echo get_theme_file_uri() ?>/img/insta07.png" alt="" class="p-insta__list__img"></a></li>
          <li class="p-insta__list__item"><a href="https://instagram.com/insho_tsubakiyama?igshid=NTc4MTIwNjQ2YQ==" class="p-insta__link"><img src="<?php echo get_theme_file_uri() ?>/img/insta08.png" alt="" class="p-insta__list__img"></a></li>
          <li class="p-insta__list__item"><a href="https://instagram.com/insho_tsubakiyama?igshid=NTc4MTIwNjQ2YQ==s" class="p-insta__link"><img src="<?php echo get_theme_file_uri() ?>/img/insta09.png" alt="" class="p-insta__list__img"></a></li>
        </ul>

        <div class="p-insta__btn__box">
        <a href="<?php echo home_url('/about'); ?>" class="c-button2 c-f14">
          <p>もっと見る</p>
        </a>
        </div>
      </article>

      <article class="p-youtube">
        <div class="p-youtube__inner__ttl__line1 c-sub-ttl c-f14">
          <span class="p-youtube__inner__ttl__char -first">・</span>
          <span class="p-youtube__inner__ttl__char -first">Y</span>
          <span class="p-youtube__inner__ttl__char -first">o</span>
          <span class="p-youtube__inner__ttl__char -first">u</span>
          <span class="p-youtube__inner__ttl__char -first">t</span>
          <span class="p-youtube__inner__ttl__char -first">u</span>
          <span class="p-youtube__inner__ttl__char -first">b</span>
          <span class="p-youtube__inner__ttl__char -first">e</span>
        </div>

        <div class="p-youtube__inner__ttl__line2 c-font-fm">
          <span class="p-youtube__inner__ttl__char -second c-red c-circle">椿</span>
          <span class="p-youtube__inner__ttl__char -second">山</span>
          <span class="p-youtube__inner__ttl__char -second">チ</span>
          <span class="p-youtube__inner__ttl__char -second">ャ</span>
          <span class="p-youtube__inner__ttl__char -second">ン</span>
          <span class="p-youtube__inner__ttl__char -second">ネ</span>
          <span class="p-youtube__inner__ttl__char -second">ル</span>
        </div>

        <a href="https://www.youtube.com/@user-ts9pc9om9r" class="p-youtube__link">
          <img src="<?php echo get_theme_file_uri() ?>/img/youtube01.png" alt="" class="p-youtube__img">
        </a>
        <div class="p-youtube__btn__box">
        <a href="<?php echo home_url('/about'); ?>" class="c-button2 c-f14">
          <p>もっと見る</p>
        </a>
        </div>
      </article>
    </div>
  </section>


  <section class="l-faq">
    <article class="p-faq">
      <div class="p-faq__flex">
        <div class="p-faq__inner__ttl__line__box">
          <div class="p-faq__inner__ttl__line1 c-sub-ttl c-f14">
            <span class="p-faq__inner__ttl__char -first">・</span>
            <span class="p-faq__inner__ttl__char -first">f</span>
            <span class="p-faq__inner__ttl__char -first">a</span>
            <span class="p-faq__inner__ttl__char -first">q</span>
          </div>

          <div class="p-faq__inner__ttl__line2 c-font-fm">
            <span class="p-faq__inner__ttl__char -second c-red c-circle">よ</span>
            <span class="p-faq__inner__ttl__char -second">く</span>
            <span class="p-faq__inner__ttl__char -second">あ</span>
            <span class="p-faq__inner__ttl__char -second">る</span>
            <span class="p-faq__inner__ttl__char -second">ご</span>
            <span class="p-faq__inner__ttl__char -second">質</span>
            <span class="p-faq__inner__ttl__char -second">問</span>
          </div>
        </div>

        <ul class="p-faq__list">
          <li class="p-faq__list__item">
            <div class="p-faq__dec__box">
              <div class="p-faq__dec">
                <p class="p-faq__dec01">Q.</p>
                <p class="p-faq__dec02 c-f14">よくある質問はこちらです</p>
              </div>

              <div class="p-faq__btn">
              </div>
            </div>

            <div class="p-faq__dec__answer">
              <div class="p-faq__dec__answer__flex">
              <p class="p-faq__dec01">A.</p>
              <p class="p-faq__dec02 c-f14">よくある質問はこちらですよくある質問はこちらですよくある質問はこちらですよくある質問はこちらです</p>
            </div>
            </div>
          </li>

          <li class="p-faq__list__item">
            <div class="p-faq__dec__box">
              <div class="p-faq__dec">
                <p class="p-faq__dec01">Q.</p>
                <p class="p-faq__dec02 c-f14">よくある質問はこちらです</p>
              </div>

              <div class="p-faq__btn">
              </div>
            </div>

            <div class="p-faq__dec__answer">
              <div class="p-faq__dec__answer__flex">
                <p class="p-faq__dec01">A.</p>
                <p class="p-faq__dec02 c-f14">よくある質問はこちらですよくある質問はこちらですよくある質問はこちらですよくある質問はこちらです</p>
              </div>
            </div>
          </li>

          <li class="p-faq__list__item">
            <div class="p-faq__dec__box">
              <div class="p-faq__dec">
                <p class="p-faq__dec01">Q.</p>
                <p class="p-faq__dec02 c-f14">よくある質問はこちらです</p>
              </div>

              <div class="p-faq__btn">
              </div>
            </div>

            <div class="p-faq__dec__answer">
              <div class="p-faq__dec__answer__flex">
                <p class="p-faq__dec01">A.</p>
                <p class="p-faq__dec02 c-f14">よくある質問はこちらですよくある質問はこちらですよくある質問はこちらですよくある質問はこちらです</p>
              </div>
            </div>
          </li>

          <li class="p-faq__list__item">
            <div class="p-faq__dec__box">
              <div class="p-faq__dec">
                <p class="p-faq__dec01">Q.</p>
                <p class="p-faq__dec02 c-f14">よくある質問はこちらです</p>
              </div>

              <div class="p-faq__btn">
              </div>
            </div>

            <div class="p-faq__dec__answer">
              <div class="p-faq__dec__answer__flex">
                <p class="p-faq__dec01">A.</p>
                <p class="p-faq__dec02 c-f14">よくある質問はこちらですよくある質問はこちらですよくある質問はこちらですよくある質問はこちらです</p>
              </div>
            </div>
          </li>

          <li class="p-faq__list__item">
            <div class="p-faq__dec__box">
              <div class="p-faq__dec">
                <p class="p-faq__dec01">Q.</p>
                <p class="p-faq__dec02 c-f14">よくある質問はこちらです</p>
              </div>

              <div class="p-faq__btn">
              </div>
            </div>

            <div class="p-faq__dec__answer">
              <div class="p-faq__dec__answer__flex">
                <p class="p-faq__dec01">A.</p>
                <p class="p-faq__dec02 c-f14">よくある質問はこちらですよくある質問はこちらですよくある質問はこちらですよくある質問はこちらです</p>
              </div>
            </div>
          </li>
        </ul>
      </div>

      <div class="p-faq__btn__box">
      <a href="<?php echo home_url('/faq'); ?>" class="c-button2 c-f14">
        <p>もっと見る</p>
      </a>
      </div>
    </article>
  </section>

</main> <!-- l-main -->
    
    <?php get_footer(); ?>
    <?php get_template_part('wp-footer'); ?>