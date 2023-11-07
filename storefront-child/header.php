<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
  <link rel="stylesheet" href="https://use.typekit.net/hte5kno.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho&display=swap" rel="stylesheet">
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();  ?>/css/style.css?ver=0.0.12" type="text/css">
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
  />
  <!-- <link rel="SHORTCUT ICON" href="https://kokeshimatsuri.com/wp/wp-content/themes/kokeshi/img/favicon.ico" /> -->
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta property="og:title" content="100oku | おしゃれなあの女性に今贈りたい100のプレゼント">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://kokeshimatsuri.com">
  <meta property="og:image" content="">
  <meta property="og:description" content="">
  <meta property="og:site_name" content="">
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:image" content="">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0.0/dist/smooth-scroll.polyfills.min.js"></script>
  <script type="text/javascript">
  // ページ内リンクのみ取得
    var scroll = new SmoothScroll('a[href*="#"]', {
    speed: 200,//スクロールする速さ
    header: '#header'//固定ヘッダーがある場合
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js" defer></script>
  <script src="https://unpkg.com/scrollreveal"></script>
  <script type="application/javascript">
    var template_url = '<?php echo get_stylesheet_directory_uri();  ?>';
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollTrigger.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script type="application/javascript" src="<?php echo get_stylesheet_directory_uri();  ?>/js/main.js?ver=0.0.4" defer></script>
  <script>
  (function(d) {
    var config = {
      kitId: 'jjc7cnr',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
</head>

<body <?php body_class(); ?>>
<div id="app">
<!-- <transition name="loadin">
	<div v-if="isloading" class="c-loading p-loading">
		<div class="p-loading__inner">
			<img class="p-loading__gif" src="<?php echo get_stylesheet_directory_uri();  ?>/img/loading.gif" alt="">
			<img class="p-loading__title" src="<?php echo get_stylesheet_directory_uri();  ?>/img/title_load.png" alt="">
		</div>
	</div>
</transition> -->
<div class="v-home" :class="[ isloading ? '-isloading' : '-noloading' ]">
<div class="bg-gray" :class="[ isMenu ? '-ismenu' : '' ]"></div><!-- .bg-gray -->

<?php wp_body_open(); ?>

<?php do_action( 'storefront_before_site' ); ?>

<div id="page" class="hfeed site">
	<?php do_action( 'storefront_before_header' ); ?>

	<!-- <header id="masthead" class="" role="banner" style="<?php storefront_header_styles(); ?>"> -->

		<?php
		/**
		 * Functions hooked into storefront_header action
		 *
		 * @hooked storefront_header_container                 - 0
		 * @hooked storefront_skip_links                       - 5
		 * @hooked storefront_social_icons                     - 10
		 * @hooked storefront_site_branding                    - 20
		 * @hooked storefront_secondary_navigation             - 30
		 * @hooked storefront_product_search                   - 40
		 * @hooked storefront_header_container_close           - 41
		 * @hooked storefront_primary_navigation_wrapper       - 42
		 * @hooked storefront_primary_navigation               - 50
		 * @hooked storefront_header_cart                      - 60
		 * @hooked storefront_primary_navigation_wrapper_close - 68
		 */
		// do_action( 'storefront_header' );
		?>

	<!-- </header> -->
	<!-- #masthead -->

	<?php
	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 * @hooked woocommerce_breadcrumb - 10
	 */
	// ★削除
	//do_action( 'storefront_before_content' );
	// ★削除
	?>

	<!-- <div id="content" class="site-content" tabindex="-1">
		<div class="col-full"> -->

		<?php
		do_action( 'storefront_content_top' );
