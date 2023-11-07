<?php get_header(); ?>
<?php get_template_part('nav'); ?>
<main id="l-main"><!-- l-main -->
  <section class="l-inquiry">
    <article class="p-inquiry">
      <div class="p-inquiry__inner__ttl__box">
        <div class="p-inquiry__inner__ttl__line1 c-sub-ttl">
          <span class="p-inquiry__inner__ttl__char -first">・</span>
          <span class="p-inquiry__inner__ttl__char -first">c</span>
          <span class="p-inquiry__inner__ttl__char -first">o</span>
          <span class="p-inquiry__inner__ttl__char -first">n</span>
          <span class="p-inquiry__inner__ttl__char -first">t</span>
          <span class="p-inquiry__inner__ttl__char -first">a</span>
          <span class="p-inquiry__inner__ttl__char -first">c</span>
          <span class="p-inquiry__inner__ttl__char -first">t</span>
        </div>

        <div class="p-inquiry__inner__ttl__line2 c-font-fm">
          <span class="p-inquiry__inner__ttl__char -second c-red c-circle">お</span>
          <span class="p-inquiry__inner__ttl__char -second">問</span>
          <span class="p-inquiry__inner__ttl__char -second">い</span>
          <span class="p-inquiry__inner__ttl__char -second">合</span>
          <span class="p-inquiry__inner__ttl__char -second">わ</span>
          <span class="p-inquiry__inner__ttl__char -second">せ</span>
        </div>
      </div>
      <p class="p-inquiry__dec">こちらのフォームに必要情報を入力頂き送信してください。ご返信に3営業日ほどお時間を頂いております。</p>
      <?php the_content(); ?>
    </article>
  </section>
</main><!-- l-main -->

    
<?php get_footer(); ?>
<?php get_template_part('wp-footer'); ?>