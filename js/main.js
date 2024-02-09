const TB = 769;
const PC = 960;

const wp_dir = "/wp/";

$(function () {
  $(".js-area-title").on("click", function () {
    $(this).next().slideToggle();
  });
});

$(function () {
  $('.p-faq__dec__box').click(function () {
    $(this).siblings('.p-faq__dec__answer').stop().slideToggle();
    $('.p-faq__dec__box').not($(this)).siblings('.p-faq__dec__answer').slideUp();
    $(this).toggleClass('active');
    $('.p-faq__dec__box').not($(this)).removeClass('active');
  });
});

$(function () {
  $('.p-faq__dec__box').click(function () {
    $(this).toggleClass('selected');
    $($(this).parent().attr('data-content')).slideToggle();
  });
});

$(function () {
  $('.p-nav__list__dec__box1').click(function () {
    $(this).siblings('.p-nav__list__dec__box2').stop().slideToggle();
    $('.p-nav__list__dec__box1').not($(this)).siblings('.p-nav__list__dec__box2').slideUp();
    $(this).toggleClass('active');
    $('.p-nav__list__dec__box1').not($(this)).removeClass('active');
  });
});

$(function () {
  $('.p-nav__list__dec__box1').click(function () {
    $(this).toggleClass('selected');
    $($(this).parent().attr('data-content')).slideToggle();
  });
});



Vue.component('fade-in', {
  template: `
	<div class="fadein-box__outer">
  	<transition name="fadein">
      <div v-if="visible" class="fadein-box__inner">
  		<slot></slot>
      </div>
    </transition>
  </div>`,
  data() {
    return {
      visible: false
    };
  }, mounted() {
    if (!this.visible) {
      var top = this.$el.getBoundingClientRect().top;
      this.visible = top < window.innerHeight - 90;
    }
  },
  methods: {
    handleScroll() {
      if (!this.visible) {
        var top = this.$el.getBoundingClientRect().top;
        this.visible = top < window.innerHeight - 90;
      }
    }
  },
  created() {
    window.addEventListener('scroll', this.handleScroll);
  },
  destroyed() {
    window.removeEventListener('scroll', this.handleScroll);
  }
})

new Vue({
  el: '#app',
  data: {
    scrollY: 0,
    isLoad: false,
    isDown: false,
    isMenu: false,
    isNav: false,
    isLeadEnd: false,
    isTopPage: false,
    isWorksPage: false,
    isWorksDtPage: false,
    isTb: false,
    isPC: false,
    isloading: true,
    isloadingLogo: false,
    isOpenHigashi: false,
    isOpenChubu: false,
    isOpenKinki: false,
    isOpenChugoku: false,
    isOpenShikoku: false,
    isOpenKyusyu: false,
    isDown: false,
    pages: [
      { slug: 'news', isCurrent: false },
      { slug: '#what', isCurrent: false },
      { slug: '#events', isCurrent: false },
      { slug: 'access', isCurrent: false },
      { slug: 'colum', isCurrent: false },
      { slug: 'kokeshi', isCurrent: false },
      { slug: 'poster-gallery', isCurrent: false },
    ],
    isNews__list__hover: [
      false,
      false,
      false
    ],
  },
  mounted() {

    //Swiper1
    const swiper = new Swiper(".kv", {
      //設定例
      loop: true, //繰り返しをする
      centeredSlides: true, //アクティブなスライドを中央に表示
      slidesPerView: 1, //スライダーコンテナにスライドを3枚同時表示
      spaceBetween: 16, //スライド間の距離を16pxに
      speed: 2000, //スライドの推移時間を600msに
      effect: "fade",
      breakpoints: {
        768: {
          speed: 600, // スライドの切り替えスピード
          loop: true, // ループさせる
          slidesPerView: 1, // スライドを複数枚表示する
          centeredSlides: true,  // スライドを中央寄せにする
          spaceBetween: 0, // スライド間の余白
        }
      },

      autoplay: {
        delay: 4000,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-kv", //必須
        clickable: true,
        //使いたいパラメータを追加する
      },
    });

    window.addEventListener("DOMContentLoaded", () => {
      const infiniteSwiper = new Swiper(".infinite-swiper", {
        loop: true,
        loopedSlides: 2,
        slidesPerView: 2,
        speed: 5000,
        autoplay: {
          delay: 0,
          disableOnInteraction: false,
        },
        breakpoints: {
          768: {
            speed: 6000, // スライドの切り替えスピード
            loopedSlides: 3.2,
            loop: true, // ループさせる
            slidesPerView: 3.2, // スライドを複数枚表示する
            autoplay: {
              delay: 0,
              disableOnInteraction: false,
            },
          }
        },
      });
    });

    const swiperRecommend = new Swiper(".swiper-recommend", {
      speed: 600, // スライドの切り替えスピード
      loop: false, // ループさせる
      slidesPerView: 1.1, // スライドを複数枚表示する
      centeredSlides: true,  // スライドを中央寄せにする
      spaceBetween: -50, // スライド間の余白
      // freeMode: true, // 前後のスライドで止まらずにスライド
      breakpoints: {
        768: {
          speed: 600, // スライドの切り替えスピード
          loop: false, // ループさせる
          slidesPerView: 2.3, // スライドを複数枚表示する
          centeredSlides: false,  // スライドを中央寄せにする
          spaceBetween: 30, // スライド間の余白
        }
      },

      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },

      pagination: {
        el: ".swiper-recommend-pagination",
        type: "bullets",
        clickable: "clickable",
      },
    });

    const swiperAbout = new Swiper(".swiper-about", {
      speed: 600, // スライドの切り替えスピード
      loop: false, // ループさせる
      slidesPerView: 1.5, // スライドを複数枚表示する
      centeredSlides: false,  // スライドを中央寄せにする
      spaceBetween: 10, // スライド間の余白
      // freeMode: true, // 前後のスライドで止まらずにスライド
      breakpoints: {
        768: {
          speed: 600, // スライドの切り替えスピード
          loop: false, // ループさせる
          slidesPerView: 2.2, // スライドを複数枚表示する
          centeredSlides: false,  // スライドを中央寄せにする
          spaceBetween: 20, // スライド間の余白
        }
      },

      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },

      pagination: {
        el: ".swiper-about-pagination",
        type: "bullets",
        clickable: "clickable",
      },
    });



    window.addEventListener('scroll', this.handleScroll);
    window.addEventListener('resize', this.handleResize);

    if (window.innerWidth >= PC) {
      this.isPC = true;
      this.isTb = false;
    } else if (window.innerWidth >= TB) {
      this.isPC = false;
      this.isTb = true;
    } else {
      this.isPC = false;
      this.isTb = false;
    }
    this.isLoad = true;

    if (window.pageYOffset == 0) {
      this.isDown = false;
    } else {
      this.isDown = true;
    }

    //対象の要素を取得する
    const targets = document.querySelectorAll('.js-span-target');
    //要素の内容を関数の実行結果で置き換える
    targets.forEach((target) => {
      target.innerHTML = this.wrapCharSpan(target.textContent);
    });

    if (location.pathname == '/wp/' || location.pathname == '/') {
      this.isTopPage = true;

      this.isloadingLogo = false;
    } else {
      setTimeout(() => {
        this.isloading = false;
      }, 1000);
      this.isTop = false;
      this.isTopPage = false;
      let rootPath = '';
      console.log('location.pathname', location.pathname);
      if (location.pathname.indexOf(wp_dir) === 0) {
        rootPath = wp_dir;
      } else {
        rootPath = '/';
      }
      console.log('rootPath', rootPath);
      // const worksPagePath = rootPath + '';
      // const worksDtPagePath = rootPath + 'works/';
      // const tagPagePath = rootPath + 'tag/';
      // if (location.pathname.indexOf(worksPagePath) > -1) { // 部分一致
      //   this.isWorksPage = true;
      // } else if (location.pathname.indexOf(tagPagePath) > -1) { // 部分一致
      //   this.isWorksPage = true;
      // } else if (location.pathname.indexOf(worksDtPagePath) > -1) { // 部分一致
      //   this.isWorksDtPage = true;
      // }

      // カレントページのフラグをONする    
      for (let page of this.pages) {
        if (location.pathname.indexOf(rootPath + page.slug) === 0) {
          page.isCurrent = true;
        } else {
          page.isCurrent = false;
        }
      }
    }


    // gsapアニメーションーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー
    gsap.from(".p-kv__inner__ttl__char", {
      x: 50,
      autoAlpha: 0,
      duration: 1,
      ease: "power4.out",
      stagger: 0.08, // 0.02秒ごとに出現
    });


    $(function () {
      let mm = gsap.matchMedia();

      mm.add("(max-width: 768px)", () => {
        // ここに768px以下のときのコードを書きます
        // gsap.to('.p-scroll__img', {
        //   y: 740,
        //   scrollTrigger: {
        //     trigger: '.p-scroll__img',
        //     start: '100 center', // 開始する位置
        //     end: '900 top',// 終了する位置
        //     scrub: true, // スクロール量に応じてアニメーション
        //   }
        // });
        gsap.fromTo(
          "#l-intro", //アニメーションしたい要素
          {
            //アニメーション前の記入
            y: 20, //アニメーション開始前の位置
            autoAlpha: 0, //アニメーション開始前の状態
          },
          {
            //アニメーション後の記入
            y: 0, //アニメーション後の位置
            autoAlpha: 1, //アニメーション後の状態
            duration: 1,
            scrollTrigger: {
              trigger: "#l-intro", //アニメーションが始まるトリガーとなる要素
              start: "30% bottom", //アニメーションが始まる位置を指定

            },
          }
        );

        gsap.fromTo(
          "#l-product", //アニメーションしたい要素
          {
            //アニメーション前の記入
            y: 20, //アニメーション開始前の位置
            autoAlpha: 0, //アニメーション開始前の状態
          },
          {
            //アニメーション後の記入
            y: 0, //アニメーション後の位置
            autoAlpha: 1, //アニメーション後の状態
            duration: 1,
            scrollTrigger: {
              trigger: "#l-product", //アニメーションが始まるトリガーとなる要素
              start: "20% bottom", //アニメーションが始まる位置を指定

            },
          }
        );

        gsap.fromTo(
          "#l-set", //アニメーションしたい要素
          {
            //アニメーション前の記入
            y: 20, //アニメーション開始前の位置
            autoAlpha: 0, //アニメーション開始前の状態
          },
          {
            //アニメーション後の記入
            y: 0, //アニメーション後の位置
            autoAlpha: 1, //アニメーション後の状態
            duration: 1,
            scrollTrigger: {
              trigger: "#l-set", //アニメーションが始まるトリガーとなる要素
              start: "20% bottom", //アニメーションが始まる位置を指定

            },
          }
        );

        gsap.fromTo(
          "#l-recommend", //アニメーションしたい要素
          {
            //アニメーション前の記入
            y: 20, //アニメーション開始前の位置
            autoAlpha: 0, //アニメーション開始前の状態
          },
          {
            //アニメーション後の記入
            y: 0, //アニメーション後の位置
            autoAlpha: 1, //アニメーション後の状態
            duration: 1,
            scrollTrigger: {
              trigger: "#l-recommend", //アニメーションが始まるトリガーとなる要素
              start: "20% bottom", //アニメーションが始まる位置を指定

            },
          }
        );

        gsap.fromTo(
          ".l-gift-set", //アニメーションしたい要素
          {
            //アニメーション前の記入
            y: 20, //アニメーション開始前の位置
            autoAlpha: 0, //アニメーション開始前の状態
          },
          {
            //アニメーション後の記入
            y: 0, //アニメーション後の位置
            autoAlpha: 2, //アニメーション後の状態
            duration: 1,
            scrollTrigger: {
              trigger: ".l-gift-set", //アニメーションが始まるトリガーとなる要素
              start: "-30% bottom", //アニメーションが始まる位置を指定

            },
          }
        );

        gsap.fromTo(
          ".l-news", //アニメーションしたい要素
          {
            //アニメーション前の記入
            y: 20, //アニメーション開始前の位置
            autoAlpha: 0, //アニメーション開始前の状態
          },
          {
            //アニメーション後の記入
            y: 0, //アニメーション後の位置
            autoAlpha: 2, //アニメーション後の状態
            duration: 1,
            scrollTrigger: {
              trigger: ".l-news", //アニメーションが始まるトリガーとなる要素
              start: "center bottom", //アニメーションが始まる位置を指定

            },
          }
        );

        gsap.fromTo(
          ".l-sns", //アニメーションしたい要素
          {
            //アニメーション前の記入
            y: 20, //アニメーション開始前の位置
            autoAlpha: 0, //アニメーション開始前の状態
          },
          {
            //アニメーション後の記入
            y: 0, //アニメーション後の位置
            autoAlpha: 2, //アニメーション後の状態
            duration: 1,
            scrollTrigger: {
              trigger: ".l-sns", //アニメーションが始まるトリガーとなる要素
              start: "20% bottom", //アニメーションが始まる位置を指定

            },
          }
        );

        gsap.fromTo(
          ".l-faq", //アニメーションしたい要素
          {
            //アニメーション前の記入
            y: 20, //アニメーション開始前の位置
            autoAlpha: 0, //アニメーション開始前の状態
          },
          {
            //アニメーション後の記入
            y: 0, //アニメーション後の位置
            autoAlpha: 2, //アニメーション後の状態
            duration: 1,
            scrollTrigger: {
              trigger: ".l-faq", //アニメーションが始まるトリガーとなる要素
              start: "20% bottom", //アニメーションが始まる位置を指定

            },
          }
        );

        // フロントページーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー


        // アバウトページーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー
        gsap.fromTo(
          ".p-about__sec01", //アニメーションしたい要素
          {
            //アニメーション前の記入
            y: 20, //アニメーション開始前の位置
            autoAlpha: 0, //アニメーション開始前の状態
          },
          {
            //アニメーション後の記入
            y: 0, //アニメーション後の位置
            autoAlpha: 1, //アニメーション後の状態
            duration: 1,
            scrollTrigger: {
              trigger: ".p-about__sec01", //アニメーションが始まるトリガーとなる要素
              start: "top bottom", //アニメーションが始まる位置を指定

            },
          }
        );

        gsap.fromTo(
          ".p-about__sec02", //アニメーションしたい要素
          {
            //アニメーション前の記入
            y: 20, //アニメーション開始前の位置
            autoAlpha: 0, //アニメーション開始前の状態
          },
          {
            //アニメーション後の記入
            y: 0, //アニメーション後の位置
            autoAlpha: 1, //アニメーション後の状態
            duration: 1,
            scrollTrigger: {
              trigger: ".p-about__sec02", //アニメーションが始まるトリガーとなる要素
              start: "top bottom", //アニメーションが始まる位置を指定

            },
          }
        );

        gsap.fromTo(
          ".about-swiper__box", //アニメーションしたい要素
          {
            //アニメーション前の記入
            y: 20, //アニメーション開始前の位置
            autoAlpha: 0, //アニメーション開始前の状態
          },
          {
            //アニメーション後の記入
            y: 0, //アニメーション後の位置
            autoAlpha: 1, //アニメーション後の状態
            duration: 1,
            scrollTrigger: {
              trigger: ".about-swiper__box", //アニメーションが始まるトリガーとなる要素
              start: "top bottom", //アニメーションが始まる位置を指定

            },
          }
        );

        gsap.fromTo(
          ".p-about__sec03", //アニメーションしたい要素
          {
            //アニメーション前の記入
            y: 20, //アニメーション開始前の位置
            autoAlpha: 0, //アニメーション開始前の状態
          },
          {
            //アニメーション後の記入
            y: 0, //アニメーション後の位置
            autoAlpha: 1, //アニメーション後の状態
            duration: 1,
            scrollTrigger: {
              trigger: ".p-about__sec03", //アニメーションが始まるトリガーとなる要素
              start: "10% bottom", //アニメーションが始まる位置を指定

            },
          }
        );

        gsap.fromTo(
          ".p-about__sec04", //アニメーションしたい要素
          {
            //アニメーション前の記入
            y: 20, //アニメーション開始前の位置
            autoAlpha: 0, //アニメーション開始前の状態
          },
          {
            //アニメーション後の記入
            y: 0, //アニメーション後の位置
            autoAlpha: 1, //アニメーション後の状態
            duration: 1,
            scrollTrigger: {
              trigger: ".p-about__sec04", //アニメーションが始まるトリガーとなる要素
              start: "10% bottom", //アニメーションが始まる位置を指定

            },
          }
        );

        gsap.fromTo(
          ".p-about__sec05", //アニメーションしたい要素
          {
            //アニメーション前の記入
            y: 20, //アニメーション開始前の位置
            autoAlpha: 0, //アニメーション開始前の状態
          },
          {
            //アニメーション後の記入
            y: 0, //アニメーション後の位置
            autoAlpha: 1, //アニメーション後の状態
            duration: 1,
            scrollTrigger: {
              trigger: ".p-about__sec05", //アニメーションが始まるトリガーとなる要素
              start: "20% bottom", //アニメーションが始まる位置を指定

            },
          }
        );

        // アバウトページーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー

        // ニュースページーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー

        gsap.fromTo(
          "#l-news", //アニメーションしたい要素
          {
            //アニメーション前の記入
            y: 20, //アニメーション開始前の位置
            autoAlpha: 0, //アニメーション開始前の状態
          },
          {
            //アニメーション後の記入
            y: 0, //アニメーション後の位置
            autoAlpha: 1, //アニメーション後の状態
            duration: 1,
            scrollTrigger: {
              trigger: "#l-news", //アニメーションが始まるトリガーとなる要素
              start: "top bottom", //アニメーションが始まる位置を指定

            },
          }
        );

        gsap.fromTo(
          "#l-single-news", //アニメーションしたい要素
          {
            //アニメーション前の記入
            y: 20, //アニメーション開始前の位置
            autoAlpha: 0, //アニメーション開始前の状態
          },
          {
            //アニメーション後の記入
            y: 0, //アニメーション後の位置
            autoAlpha: 1, //アニメーション後の状態
            duration: 1,
            scrollTrigger: {
              trigger: "#l-single-news", //アニメーションが始まるトリガーとなる要素
              start: "top bottom", //アニメーションが始まる位置を指定

            },
          }
        );

        // ニュースページーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー

        // コンタクトページーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー

        gsap.fromTo(
          ".l-inquiry", //アニメーションしたい要素
          {
            //アニメーション前の記入
            y: 20, //アニメーション開始前の位置
            autoAlpha: 0, //アニメーション開始前の状態
          },
          {
            //アニメーション後の記入
            y: 0, //アニメーション後の位置
            autoAlpha: 1, //アニメーション後の状態
            duration: 1,
            scrollTrigger: {
              trigger: ".l-inquiry", //アニメーションが始まるトリガーとなる要素
              start: "top bottom", //アニメーションが始まる位置を指定

            },
          }
        );

        // コンタクトページーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー

        // 商品詳細ページーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー

        gsap.fromTo(
          "#l-single-product", //アニメーションしたい要素
          {
            //アニメーション前の記入
            y: 20, //アニメーション開始前の位置
            autoAlpha: 0, //アニメーション開始前の状態
          },
          {
            //アニメーション後の記入
            y: 0, //アニメーション後の位置
            autoAlpha: 1, //アニメーション後の状態
            duration: 1,
            scrollTrigger: {
              trigger: "#l-single-product", //アニメーションが始まるトリガーとなる要素
              start: "top bottom", //アニメーションが始まる位置を指定

            },
          }
        );

        // 商品詳細ページーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー

        // 質問ページーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー

        gsap.fromTo(
          ".l-single-faq", //アニメーションしたい要素
          {
            //アニメーション前の記入
            y: 20, //アニメーション開始前の位置
            autoAlpha: 0, //アニメーション開始前の状態
          },
          {
            //アニメーション後の記入
            y: 0, //アニメーション後の位置
            autoAlpha: 1, //アニメーション後の状態
            duration: 1,
            scrollTrigger: {
              trigger: ".l-single-faq", //アニメーションが始まるトリガーとなる要素
              start: "top bottom", //アニメーションが始まる位置を指定

            },
          }
        );

        // 質問ページーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー

        // カートページーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー

        gsap.fromTo(
          "#l-cart", //アニメーションしたい要素
          {
            //アニメーション前の記入
            y: 20, //アニメーション開始前の位置
            autoAlpha: 0, //アニメーション開始前の状態
          },
          {
            //アニメーション後の記入
            y: 0, //アニメーション後の位置
            autoAlpha: 1, //アニメーション後の状態
            duration: 1,
            scrollTrigger: {
              trigger: "#l-cart", //アニメーションが始まるトリガーとなる要素
              start: "top bottom", //アニメーションが始まる位置を指定

            },
          }
        );

        // カートページーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー
      });
      mm.add("(min-width: 768px)", () => {
        // ここに768px以上のときのコードを書きます
        // gsap.to('.p-scroll__img', {
        //   y: '34vw',
        //   scrollTrigger: {
        //     trigger: '.p-scroll__img',
        //     start: 'center center', // 開始する位置
        //     end: '800vw center',// 終了する位置
        //     scrub: true, // スクロール量に応じてアニメーション
        //     markers: true,
        //   }
        // });


        // フロントページーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー


        gsap.fromTo(
          "#l-intro", //アニメーションしたい要素
          {
            //アニメーション前の記入
            y: 20, //アニメーション開始前の位置
            autoAlpha: 0, //アニメーション開始前の状態
          },
          {
            //アニメーション後の記入
            y: 0, //アニメーション後の位置
            autoAlpha: 1, //アニメーション後の状態
            duration: 1,
            scrollTrigger: {
              trigger: "#l-intro", //アニメーションが始まるトリガーとなる要素
              start: "center bottom", //アニメーションが始まる位置を指定

            },
          }
        );

        gsap.fromTo(
          "#l-product", //アニメーションしたい要素
          {
            //アニメーション前の記入
            y: 20, //アニメーション開始前の位置
            autoAlpha: 0, //アニメーション開始前の状態
          },
          {
            //アニメーション後の記入
            y: 0, //アニメーション後の位置
            autoAlpha: 1, //アニメーション後の状態
            duration: 1,
            scrollTrigger: {
              trigger: "#l-product", //アニメーションが始まるトリガーとなる要素
              start: "center bottom", //アニメーションが始まる位置を指定

            },
          }
        );

        gsap.fromTo(
          "#l-set", //アニメーションしたい要素
          {
            //アニメーション前の記入
            y: 20, //アニメーション開始前の位置
            autoAlpha: 0, //アニメーション開始前の状態
          },
          {
            //アニメーション後の記入
            y: 0, //アニメーション後の位置
            autoAlpha: 1, //アニメーション後の状態
            duration: 1,
            scrollTrigger: {
              trigger: "#l-set", //アニメーションが始まるトリガーとなる要素
              start: "center bottom", //アニメーションが始まる位置を指定

            },
          }
        );

        gsap.fromTo(
          "#l-recommend", //アニメーションしたい要素
          {
            //アニメーション前の記入
            y: 20, //アニメーション開始前の位置
            autoAlpha: 0, //アニメーション開始前の状態
          },
          {
            //アニメーション後の記入
            y: 0, //アニメーション後の位置
            autoAlpha: 1, //アニメーション後の状態
            duration: 1,
            scrollTrigger: {
              trigger: "#l-recommend", //アニメーションが始まるトリガーとなる要素
              start: "70% bottom", //アニメーションが始まる位置を指定

            },
          }
        );

        gsap.fromTo(
          ".l-gift-set", //アニメーションしたい要素
          {
            //アニメーション前の記入
            y: 20, //アニメーション開始前の位置
            autoAlpha: 0, //アニメーション開始前の状態
          },
          {
            //アニメーション後の記入
            y: 0, //アニメーション後の位置
            autoAlpha: 2, //アニメーション後の状態
            duration: 1,
            scrollTrigger: {
              trigger: ".l-gift-set", //アニメーションが始まるトリガーとなる要素
              start: "center bottom", //アニメーションが始まる位置を指定

            },
          }
        );

        gsap.fromTo(
          ".l-news", //アニメーションしたい要素
          {
            //アニメーション前の記入
            y: 20, //アニメーション開始前の位置
            autoAlpha: 0, //アニメーション開始前の状態
          },
          {
            //アニメーション後の記入
            y: 0, //アニメーション後の位置
            autoAlpha: 2, //アニメーション後の状態
            duration: 1,
            scrollTrigger: {
              trigger: ".l-news", //アニメーションが始まるトリガーとなる要素
              start: "center bottom", //アニメーションが始まる位置を指定

            },
          }
        );

        gsap.fromTo(
          ".l-sns", //アニメーションしたい要素
          {
            //アニメーション前の記入
            y: 20, //アニメーション開始前の位置
            autoAlpha: 0, //アニメーション開始前の状態
          },
          {
            //アニメーション後の記入
            y: 0, //アニメーション後の位置
            autoAlpha: 2, //アニメーション後の状態
            duration: 1,
            scrollTrigger: {
              trigger: ".l-sns", //アニメーションが始まるトリガーとなる要素
              start: "center bottom", //アニメーションが始まる位置を指定

            },
          }
        );

        gsap.fromTo(
          ".l-faq", //アニメーションしたい要素
          {
            //アニメーション前の記入
            y: 20, //アニメーション開始前の位置
            autoAlpha: 0, //アニメーション開始前の状態
          },
          {
            //アニメーション後の記入
            y: 0, //アニメーション後の位置
            autoAlpha: 2, //アニメーション後の状態
            duration: 1,
            scrollTrigger: {
              trigger: ".l-faq", //アニメーションが始まるトリガーとなる要素
              start: "center bottom", //アニメーションが始まる位置を指定

            },
          }
        );

        // フロントページーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー


        // アバウトページーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー
        gsap.fromTo(
          ".p-about__sec01", //アニメーションしたい要素
          {
            //アニメーション前の記入
            y: 20, //アニメーション開始前の位置
            autoAlpha: 0, //アニメーション開始前の状態
          },
          {
            //アニメーション後の記入
            y: 0, //アニメーション後の位置
            autoAlpha: 1, //アニメーション後の状態
            duration: 1,
            scrollTrigger: {
              trigger: ".p-about__sec01", //アニメーションが始まるトリガーとなる要素
              start: "center bottom", //アニメーションが始まる位置を指定

            },
          }
        );

        gsap.fromTo(
          ".p-about__sec02", //アニメーションしたい要素
          {
            //アニメーション前の記入
            y: 20, //アニメーション開始前の位置
            autoAlpha: 0, //アニメーション開始前の状態
          },
          {
            //アニメーション後の記入
            y: 0, //アニメーション後の位置
            autoAlpha: 1, //アニメーション後の状態
            duration: 1,
            scrollTrigger: {
              trigger: ".p-about__sec02", //アニメーションが始まるトリガーとなる要素
              start: "center bottom", //アニメーションが始まる位置を指定

            },
          }
        );

        gsap.fromTo(
          ".about-swiper__box", //アニメーションしたい要素
          {
            //アニメーション前の記入
            y: 20, //アニメーション開始前の位置
            autoAlpha: 0, //アニメーション開始前の状態
          },
          {
            //アニメーション後の記入
            y: 0, //アニメーション後の位置
            autoAlpha: 1, //アニメーション後の状態
            duration: 1,
            scrollTrigger: {
              trigger: ".about-swiper__box", //アニメーションが始まるトリガーとなる要素
              start: "center bottom", //アニメーションが始まる位置を指定

            },
          }
        );

        gsap.fromTo(
          ".p-about__sec03", //アニメーションしたい要素
          {
            //アニメーション前の記入
            y: 20, //アニメーション開始前の位置
            autoAlpha: 0, //アニメーション開始前の状態
          },
          {
            //アニメーション後の記入
            y: 0, //アニメーション後の位置
            autoAlpha: 1, //アニメーション後の状態
            duration: 1,
            scrollTrigger: {
              trigger: ".p-about__sec03", //アニメーションが始まるトリガーとなる要素
              start: "20% bottom", //アニメーションが始まる位置を指定

            },
          }
        );

        gsap.fromTo(
          ".p-about__sec04", //アニメーションしたい要素
          {
            //アニメーション前の記入
            y: 20, //アニメーション開始前の位置
            autoAlpha: 0, //アニメーション開始前の状態
          },
          {
            //アニメーション後の記入
            y: 0, //アニメーション後の位置
            autoAlpha: 1, //アニメーション後の状態
            duration: 1,
            scrollTrigger: {
              trigger: ".p-about__sec04", //アニメーションが始まるトリガーとなる要素
              start: "20% bottom", //アニメーションが始まる位置を指定

            },
          }
        );

        gsap.fromTo(
          ".p-about__sec05", //アニメーションしたい要素
          {
            //アニメーション前の記入
            y: 20, //アニメーション開始前の位置
            autoAlpha: 0, //アニメーション開始前の状態
          },
          {
            //アニメーション後の記入
            y: 0, //アニメーション後の位置
            autoAlpha: 1, //アニメーション後の状態
            duration: 1,
            scrollTrigger: {
              trigger: ".p-about__sec05", //アニメーションが始まるトリガーとなる要素
              start: "30% bottom", //アニメーションが始まる位置を指定

            },
          }
        );

        // アバウトページーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー

        // ニュースページーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー

        gsap.fromTo(
          "#l-news", //アニメーションしたい要素
          {
            //アニメーション前の記入
            y: 20, //アニメーション開始前の位置
            autoAlpha: 0, //アニメーション開始前の状態
          },
          {
            //アニメーション後の記入
            y: 0, //アニメーション後の位置
            autoAlpha: 1, //アニメーション後の状態
            duration: 1,
            scrollTrigger: {
              trigger: "#l-news", //アニメーションが始まるトリガーとなる要素
              start: "top bottom", //アニメーションが始まる位置を指定

            },
          }
        );

        gsap.fromTo(
          "#l-single-news", //アニメーションしたい要素
          {
            //アニメーション前の記入
            y: 20, //アニメーション開始前の位置
            autoAlpha: 0, //アニメーション開始前の状態
          },
          {
            //アニメーション後の記入
            y: 0, //アニメーション後の位置
            autoAlpha: 1, //アニメーション後の状態
            duration: 1,
            scrollTrigger: {
              trigger: "#l-single-news", //アニメーションが始まるトリガーとなる要素
              start: "top bottom", //アニメーションが始まる位置を指定

            },
          }
        );

        // ニュースページーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー

        // コンタクトページーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー

        gsap.fromTo(
          ".l-inquiry", //アニメーションしたい要素
          {
            //アニメーション前の記入
            y: 20, //アニメーション開始前の位置
            autoAlpha: 0, //アニメーション開始前の状態
          },
          {
            //アニメーション後の記入
            y: 0, //アニメーション後の位置
            autoAlpha: 1, //アニメーション後の状態
            duration: 1,
            scrollTrigger: {
              trigger: ".l-inquiry", //アニメーションが始まるトリガーとなる要素
              start: "top bottom", //アニメーションが始まる位置を指定

            },
          }
        );

        // コンタクトページーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー

        // 商品詳細ページーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー

        gsap.fromTo(
          "#l-single-product", //アニメーションしたい要素
          {
            //アニメーション前の記入
            y: 20, //アニメーション開始前の位置
            autoAlpha: 0, //アニメーション開始前の状態
          },
          {
            //アニメーション後の記入
            y: 0, //アニメーション後の位置
            autoAlpha: 1, //アニメーション後の状態
            duration: 1,
            scrollTrigger: {
              trigger: "#l-single-product", //アニメーションが始まるトリガーとなる要素
              start: "top bottom", //アニメーションが始まる位置を指定

            },
          }
        );

        // 商品詳細ページーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー

        // 質問ページーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー

        gsap.fromTo(
          ".l-single-faq", //アニメーションしたい要素
          {
            //アニメーション前の記入
            y: 20, //アニメーション開始前の位置
            autoAlpha: 0, //アニメーション開始前の状態
          },
          {
            //アニメーション後の記入
            y: 0, //アニメーション後の位置
            autoAlpha: 1, //アニメーション後の状態
            duration: 1,
            scrollTrigger: {
              trigger: ".l-single-faq", //アニメーションが始まるトリガーとなる要素
              start: "top bottom", //アニメーションが始まる位置を指定

            },
          }
        );

        // 質問ページーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー

        // カートページーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー

        gsap.fromTo(
          "#l-cart", //アニメーションしたい要素
          {
            //アニメーション前の記入
            y: 20, //アニメーション開始前の位置
            autoAlpha: 0, //アニメーション開始前の状態
          },
          {
            //アニメーション後の記入
            y: 0, //アニメーション後の位置
            autoAlpha: 1, //アニメーション後の状態
            duration: 1,
            scrollTrigger: {
              trigger: "#l-cart", //アニメーションが始まるトリガーとなる要素
              start: "top bottom", //アニメーションが始まる位置を指定

            },
          }
        );

        // カートページーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー

      });
    });
  },

  // gsapアニメーションーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー

  beforeDestroy() {
    window.removeEventListener('resize', this.handleResize);
  },
  methods: {
    /**
   * 文字列を一文字ずつ<span>で囲む関数
   @param {String} str
   @return {String}
   */
    wrapCharSpan(str) {
      return [...str].map(char => `<span>${char}</span>`).join('');
    },
    setGallery() {
      const swiper = new Swiper(".c-mySwiper", {
        spaceBetween: 10,
        slidesPerView: 4
      });

      const swiper2 = new Swiper(".c-mySwiper2", {
        thumbs: {
          swiper: swiper
        },
        navigation: {
          nextEl: ".c-swiper-button-next",
          prevEl: ".c-swiper-button-prev"
        }
      });

      const swiper_copy = new Swiper(".c-mySwiper-copy", {
        spaceBetween: 10,
        slidesPerView: 4
      });

      const swiper2_copy = new Swiper(".c-mySwiper-copy2", {
        thumbs: {
          swiper: swiper
        },
        navigation: {
          nextEl: ".c-swiper-button-next",
          prevEl: ".c-swiper-button-prev"
        }
      });
    },
    changeImg_button(p_url, p_no) {
    },
    leaveImg_button() {
    },
    handleScroll() {
      // トップから少しスクロールした時
      (window.scrollY > 30) ? this.isDown = true : this.isDown = false;
    },
    handleResize() {
      if (window.innerWidth >= PC) {
        this.isPC = true;
        this.isTb = false;
      } else if (window.innerWidth >= TB) {
        this.isPC = false;
        this.isTb = true;
      } else {
        this.isPC = false;
        this.isTb = false;
      }
    },
  }
})