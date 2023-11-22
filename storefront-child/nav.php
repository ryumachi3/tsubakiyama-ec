<?php
?>

<header class="p-header">
  <div class="p-sp-header" :class="isDown?'-down':''">
   <div class="p-header__logo">
      <a href="<?php echo home_url(); ?>" class="p-header__logo__link">
        <img src="<?php echo get_theme_file_uri() ?>/img/logo.png" alt="100oku" class="p-header__logo__img">
      </a>
    </div>

    <div class="p-header__list__box">
      <!-- <div class="p-header__list__item__first" @click="isNav = !isNav" :class="[ isNav ? '-isnav' : '' ]">
        <img src="<?php echo get_theme_file_uri() ?>/img/hanko-icon.svg" alt="tsubakiyama" class="p-header__list__item__first__img">
        <div href="" class="p-header__list__item__first__link">商品一覧</div>
      </div> -->

      <ul class="p-header__list">
        
        <li class="p-header__list__item" @click="isNav = !isNav" :class="[ isNav ? '-isnav' : '' ]">
          <img src="<?php echo get_theme_file_uri() ?>/img/hanko-icon.svg" alt="" class="p-header__hanko__icon__img">
          <div href="" class="p-header__list__item__link">商品一覧<span class="p-header__list__icon__plus">　+</span><span class="p-header__list__icon__plus">　-</span></div>
        </li>

        <li class="p-header__list__item">
          <img src="<?php echo get_theme_file_uri() ?>/img/hanko-icon.svg" alt="" class="p-header__hanko__icon__img">
          <a href="<?php echo home_url('/about'); ?>" class="p-header__list__item__link">椿山について</a>
        </li>

        <li class="p-header__list__item">
          <img src="<?php echo get_theme_file_uri() ?>/img/hanko-icon.svg" alt="" class="p-header__hanko__icon__img">
          <a href="<?php echo home_url('/about'); ?>" class="p-header__list__item__link">はんこの選び方</a>
        </li>

        <li class="p-header__list__item">
          <img src="<?php echo get_theme_file_uri() ?>/img/hanko-icon.svg" alt="" class="p-header__hanko__icon__img">
          <a href="<?php echo home_url('/news'); ?>" class="p-header__list__item__link">お知らせ</a>
        </li>

        <li class="p-header__list__item">
          <img src="<?php echo get_theme_file_uri() ?>/img/hanko-icon.svg" alt="" class="p-header__hanko__icon__img">
          <a href="<?php echo home_url('/inquiry'); ?>" class="p-header__list__item__link">お問い合わせ</a>
        </li>
      </ul>
    </div>

    <div class="p-header__icon__box">
      <ul class="p-header__icon__list">
        <li class="p-header__icon__list__item login">
          <a href="#" class="p-header__icon__list__link">
            <img src="<?php echo get_theme_file_uri() ?>/img/head-icon01.svg" alt="" class="p-header__icon__img1">
          </a>
        </li>
        <li class="p-header__icon__list__item basket">
          <a href="#" class="p-header__icon__list__link">
            <img src="<?php echo get_theme_file_uri() ?>/img/head-icon02.svg" alt="" class="p-header__icon__img2">
          </a>
        </li>
        <li class="p-header__icon__list__item menu">
          <div class="p-header__icon__list__link" @click="isMenu = !isMenu" :class="[ isMenu ? '-ismenu' : '' ]">
            <img src="<?php echo get_theme_file_uri() ?>/img/head-icon03-open.svg" alt="" class="p-header__icon__list__link__img open">
            <img src="<?php echo get_theme_file_uri() ?>/img/head-icon03-close.svg" alt="" class="p-header__icon__list__link__img close">

          </div>
        </li>
      </ul>
    </div>
  </div> 


  <!-- product nav ----------------------------------------------------------------->
  <div class="p-header-product__nav__box"  :class="[ isNav ? '-isnav' : '' ]">
    <div class="p-header-product__nav">
      <div class="p-header-product__txt__box">
        <p class="p-header-product__sub__ttl__box c-red c-f14">預金口座を開設窓口で預金などに。</p>
        <h2 class="p-header-product__ttl__box c-font-fm">個人印</h2>
        <a href="<?php echo home_url('/about'); ?>" class="c-button2 pro-nav ">
          <img src="<?php echo get_theme_file_uri() ?>/img/btn-arrow_white.png" alt="" class="c-button__img pro-nav open">
          <img src="<?php echo get_theme_file_uri() ?>/img/btn-arrow.png" alt="" class="c-button__img pro-nav close">
          <p>サイズ選択へ</p>
        </a>
      </div>
      <div class="p-header-product__img__box">
        <img src="<?php echo get_theme_file_uri() ?>/img/nav-hanko1.png" alt="" class="p-header-product__img">
      </div>
    </div>

    <div class="p-header-product__nav">
      <div class="p-header-product__txt__box">
        <p class="p-header-product__sub__ttl__box c-red c-f14">預金口座を開設窓口で預金などに。</p>
        <h2 class="p-header-product__ttl__box c-font-fm">個人印</h2>
        <a href="<?php echo home_url('/about'); ?>" class="c-button2 pro-nav ">
          <img src="<?php echo get_theme_file_uri() ?>/img/btn-arrow_white.png" alt="" class="c-button__img pro-nav open">
          <img src="<?php echo get_theme_file_uri() ?>/img/btn-arrow.png" alt="" class="c-button__img pro-nav close">
          <p>サイズ選択へ</p>
        </a>
      </div>
      <div class="p-header-product__img__box">
        <img src="<?php echo get_theme_file_uri() ?>/img/nav-hanko2.png" alt="" class="p-header-product__img">
      </div>
    </div>

    <div class="p-header-product__nav">
      <div class="p-header-product__txt__box">
        <p class="p-header-product__sub__ttl__box c-red c-f14">預金口座を開設窓口で預金などに。</p>
        <h2 class="p-header-product__ttl__box c-font-fm">個人印</h2>
        <a href="<?php echo home_url('/about'); ?>" class="c-button2 pro-nav ">
          <img src="<?php echo get_theme_file_uri() ?>/img/btn-arrow_white.png" alt="" class="c-button__img pro-nav open">
          <img src="<?php echo get_theme_file_uri() ?>/img/btn-arrow.png" alt="" class="c-button__img pro-nav close">
          <p>サイズ選択へ</p>
        </a>
      </div>
      <div class="p-header-product__img__box">
        <img src="<?php echo get_theme_file_uri() ?>/img/nav-hanko3.png" alt="" class="p-header-product__img">
      </div>
    </div>

    <div class="p-header-product__nav">
      <div class="p-header-product__txt__box">
        <p class="p-header-product__sub__ttl__box c-red c-f14">預金口座を開設窓口で預金などに。</p>
        <h2 class="p-header-product__ttl__box c-font-fm">個人印</h2>
        <a href="<?php echo home_url('/about'); ?>" class="c-button2 pro-nav ">
          <img src="<?php echo get_theme_file_uri() ?>/img/btn-arrow_white.png" alt="" class="c-button__img pro-nav open">
          <img src="<?php echo get_theme_file_uri() ?>/img/btn-arrow.png" alt="" class="c-button__img pro-nav close">
          <p>サイズ選択へ</p>
        </a>
      </div>
      <div class="p-header-product__img__box">
        <img src="<?php echo get_theme_file_uri() ?>/img/nav-hanko4.png" alt="" class="p-header-product__img">
      </div>
    </div>

    <div class="p-header-product__nav last">
      <div class="p-header-product__img__box last">
        <img src="<?php echo get_theme_file_uri() ?>/img/nav-hanko5.png" alt="" class="p-header-product__img last">
      </div>
      <div class="p-nav__list__dec__txt__box last">
          <p class="p-header-product__sub__ttl__box c-red c-f14">大切な日に、大切な人へ、はんこの贈り物を。</p>
          <h2 class="p-header-product__ttl__box last c-font-fm">ギフトセット</h2>
          <p class="p-header-product__dec__box">個人印とは、その名のとおり銀行や信用金庫といった金融機関に対して届出を行ないます。 </p>
      </div>
      <a href="<?php echo home_url('/about'); ?>" class="c-button2 pro-nav last">
          <img src="<?php echo get_theme_file_uri() ?>/img/btn-arrow_white.png" alt="" class="c-button__img pro-nav open">
          <img src="<?php echo get_theme_file_uri() ?>/img/btn-arrow.png" alt="" class="c-button__img pro-nav close">
          <p>サイズ選択へ</p>
        </a>
    </div>
  </div>
  <!-- product nav ----------------------------------------------------------------->
</header>

<nav class="p-nav" :class="[ isMenu ? '-ismenu' : '' ]">
  <div class="p-nav__inner__box">
    <a href="<?php echo home_url(); ?>" class="p-nav__logo__link">
      <img src="<?php echo get_theme_file_uri() ?>/img/logo.png" alt="" class="p-nav__logo">
    </a>

    <div class="p-nav__list__box">
    <ul class="p-nav__list">
      <li class="p-nav__list__item">
        <div class="p-nav__list__dec__box1">
          <div class="p-nav__list__left">
            <img class="p-nav__list__img" src="<?php echo get_theme_file_uri() ?>/img/hanko-icon.svg" alt="">
            <p class="p-nav__list__ttl">商品一覧</p>
          </div>

          <div class="p-nav__list__right">
            <div class="p-nav__list__btn"></div>
          </div>
        </div>

        <div class="p-nav__list__dec__box2">
          <div class="p-nav__list__dec__flexbox2">
            <div class="p-nav__list__dec__img__box2">
              <img src="<?php echo get_theme_file_uri() ?>/img/nav-hanko1.png" alt="" class="p-nav__list__dec__img">
            </div>
            <div class="p-nav__list__dec__txt__box2">
              <p class="p-nav__list__dec__sub__ttl__box2">預金口座を開設窓口で預金などに。</p>
              <h2 class="p-nav__list__dec__ttl__box2 c-font-fm">個人印</h2>
              <a href="<?php echo home_url('/about'); ?>" class="c-button2 min ">
                <img src="<?php echo get_theme_file_uri() ?>/img/btn-arrow_white.png" alt="" class="c-button__img min open">
                <img src="<?php echo get_theme_file_uri() ?>/img/btn-arrow.png" alt="" class="c-button__img min close">
                <p>サイズ選択へ</p>
              </a>
            </div>
          </div>
        </div>

        <div class="p-nav__list__dec__box2">
          <div class="p-nav__list__dec__flexbox2">
            <div class="p-nav__list__dec__img__box2">
              <img src="<?php echo get_theme_file_uri() ?>/img/nav-hanko2.png" alt="" class="p-nav__list__dec__img">
            </div>
            <div class="p-nav__list__dec__txt__box2">
              <p class="p-nav__list__dec__sub__ttl__box2">預金口座を開設窓口で預金などに。</p>
              <h2 class="p-nav__list__dec__ttl__box2 c-font-fm">個人印</h2>
              <a href="<?php echo home_url('/about'); ?>" class="c-button2 min">
                <img src="<?php echo get_theme_file_uri() ?>/img/btn-arrow_white.png" alt="" class="c-button__img min open">
                <img src="<?php echo get_theme_file_uri() ?>/img/btn-arrow.png" alt="" class="c-button__img min close">
                <p>サイズ選択へ</p>
              </a>
            </div>
          </div>
        </div>

        <div class="p-nav__list__dec__box2">
          <div class="p-nav__list__dec__flexbox2">
            <div class="p-nav__list__dec__img__box2">
              <img src="<?php echo get_theme_file_uri() ?>/img/nav-hanko3.png" alt="" class="p-nav__list__dec__img">
            </div>
            <div class="p-nav__list__dec__txt__box2">
              <p class="p-nav__list__dec__sub__ttl__box2">預金口座を開設窓口で預金などに。</p>
              <h2 class="p-nav__list__dec__ttl__box2 c-font-fm">個人印</h2>
              <a href="<?php echo home_url('/about'); ?>" class="c-button2 min">
                <img src="<?php echo get_theme_file_uri() ?>/img/btn-arrow_white.png" alt="" class="c-button__img min open">
                <img src="<?php echo get_theme_file_uri() ?>/img/btn-arrow.png" alt="" class="c-button__img min close">
                <p>サイズ選択へ</p>
              </a>
            </div>
          </div>
        </div>

        <div class="p-nav__list__dec__box2">
          <div class="p-nav__list__dec__flexbox2">
            <div class="p-nav__list__dec__img__box2">
              <img src="<?php echo get_theme_file_uri() ?>/img/nav-hanko4.png" alt="" class="p-nav__list__dec__img">
            </div>
            <div class="p-nav__list__dec__txt__box2">
              <p class="p-nav__list__dec__sub__ttl__box2">預金口座を開設窓口で預金などに。</p>
              <h2 class="p-nav__list__dec__ttl__box2 c-font-fm">個人印</h2>
              <a href="<?php echo home_url('/about'); ?>" class="c-button2 min">
                <img src="<?php echo get_theme_file_uri() ?>/img/btn-arrow_white.png" alt="" class="c-button__img min open">
                <img src="<?php echo get_theme_file_uri() ?>/img/btn-arrow.png" alt="" class="c-button__img min close">
                <p>サイズ選択へ</p>
              </a>
            </div>
          </div>
        </div>

        <div class="p-nav__list__dec__box2 last">
          <div class="p-nav__list__dec__flexbox2">
            <div class="p-nav__list__dec__img__box2 last">
              <img src="<?php echo get_theme_file_uri() ?>/img/nav-hanko5.png" alt="" class="p-nav__list__dec__img">
            </div>
            <div class="p-nav__list__dec__txt__box2 last">
              <p class="p-nav__list__dec__sub__ttl__box2">預金口座を開設窓口で預金などに。</p>
              <h2 class="p-nav__list__dec__ttl__box2 c-font-fm">個人印</h2>
              <p class="p-nav__list__dec__min__box2">個人印とは、その名のとおり銀行や信用金庫といった金融機関に対して届出を行ないます。 </p>
              <a href="<?php echo home_url('/about'); ?>" class="c-button2 min">
                <img src="<?php echo get_theme_file_uri() ?>/img/btn-arrow_white.png" alt="" class="c-button__img min open">
                <img src="<?php echo get_theme_file_uri() ?>/img/btn-arrow.png" alt="" class="c-button__img min close">
                <p>サイズ選択へ</p>
              </a>
            </div>
          </div>
        </div>
      </li>

      <li class="p-nav__list__item">
        <a href="<?php echo home_url('/about'); ?>" class="p-nav__list__dec__box1">
          <div class="p-nav__list__left">
            <img class="p-nav__list__img" src="<?php echo get_theme_file_uri() ?>/img/hanko-icon.svg" alt="">
            <p class="p-nav__list__ttl">椿山について</p>
          </div>

          <div class="p-nav__list__right">
            <img class="p-nav__list__btn__img open" src="<?php echo get_theme_file_uri() ?>/img/btn-arrow_grey.png" alt="">
            <img class="p-nav__list__btn__img close" src="<?php echo get_theme_file_uri() ?>/img/btn-arrow.png" alt="">
          </div>
        </a>
      </li>

      <li class="p-nav__list__item">
        <a href="<?php echo home_url('#'); ?>" class="p-nav__list__dec__box1">
          <div class="p-nav__list__left">
            <img class="p-nav__list__img" src="<?php echo get_theme_file_uri() ?>/img/hanko-icon.svg" alt="">
            <p class="p-nav__list__ttl">はんこの選び方</p>
          </div>

          <div class="p-nav__list__right">
            <img class="p-nav__list__btn__img open" src="<?php echo get_theme_file_uri() ?>/img/btn-arrow_grey.png" alt="">
            <img class="p-nav__list__btn__img close" src="<?php echo get_theme_file_uri() ?>/img/btn-arrow.png" alt="">
          </div>
        </a>
      </li>

      <li class="p-nav__list__item">
        <a href="<?php echo home_url('/news'); ?>" class="p-nav__list__dec__box1">
          <div class="p-nav__list__left">
            <img class="p-nav__list__img" src="<?php echo get_theme_file_uri() ?>/img/hanko-icon.svg" alt="">
            <p class="p-nav__list__ttl">お知らせ</p>
          </div>

          <div class="p-nav__list__right">
            <img class="p-nav__list__btn__img open" src="<?php echo get_theme_file_uri() ?>/img/btn-arrow_grey.png" alt="">
            <img class="p-nav__list__btn__img close" src="<?php echo get_theme_file_uri() ?>/img/btn-arrow.png" alt="">
          </div>
        </a>
      </li>

      <li class="p-nav__list__item">
        <a href="<?php echo home_url('/inquiry'); ?>" href="<?php echo home_url('/inquiry'); ?>" class="p-nav__list__dec__box1">
          <div class="p-nav__list__left">
            <img class="p-nav__list__img" src="<?php echo get_theme_file_uri() ?>/img/hanko-icon.svg" alt="">
            <p class="p-nav__list__ttl">お問い合わせ</p>
          </div>

          <div class="p-nav__list__right">
            <img class="p-nav__list__btn__img open" src="<?php echo get_theme_file_uri() ?>/img/btn-arrow_grey.png" alt="">
            <img class="p-nav__list__btn__img close" src="<?php echo get_theme_file_uri() ?>/img/btn-arrow.png" alt="">
          </div>
        </a>
      </li>
    </ul>
    </div>

    <div class="p-nav-info__box">
      <a class="p-nav-info__logo__link" href="<?php echo home_url(); ?>">
        <img class="p-nav-info__logo__img" src="<?php echo get_theme_file_uri() ?>/img/logo.png">
      </a>
      <div class="p-nav-info__txt__box">
        <p class="p-nav__info01 c-f14">ご注文は店舗・お電話からでも可能です。</p>
        <a href="tel:086-525-5667" alt="TEL:086-525-5667" class="p-nav__tel__link">
          <img class="p-nav__info__img"src="<?php echo get_theme_file_uri() ?>/img/info_tel.png" alt="">
        </a>
        <p class="p-nav__info__dec">〒713-8102 岡山県倉敷市玉島1373-12（駐車場 4台）</p>
        <p class="p-nav__info__dec">TEL:086-525-5667</p>
        <p class="p-nav__info__dec">FAX:086-525-5674</p>
        <p class="p-nav__info__dec">営業時間:9:00～19:00（定休日日・祝日）</p>
      </div>
    </div>
  </div>
</nav>

<?php ?>