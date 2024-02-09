<?php get_header(); ?>
<?php get_template_part('nav'); ?>
<?php get_template_part('subnav'); ?>
<!-- main-visual-->
<!-- contents -->
<div id="contents">
    <div class="l-contents-wrap01">

      <section class="l-common-sec p-genre -page">
        <div class="l-common-sec__inner">
          <h2 class="p-genre__title -page">
            <span class="c-title-top-en p-genre__title__en">
            <span class="c-title-top-en__child gsp-anime__genre__title">G</span>
            <span class="c-title-top-en__child gsp-anime__genre__title">e</span>
            <span class="c-title-top-en__child gsp-anime__genre__title">n</span>
            <span class="c-title-top-en__child gsp-anime__genre__title">r</span>
            <span class="c-title-top-en__child gsp-anime__genre__title">e</span>
          </span>
          <span class="c-title-top-jp p-genre__title__jp">
            <span class="c-title-top-jp__child gsp-anime__genre__title">人</span>
            <span class="c-title-top-jp__child gsp-anime__genre__title">気</span>
            <span class="c-title-top-jp__child gsp-anime__genre__title">の</span>
            <span class="c-title-top-jp__child gsp-anime__genre__title">プ</span>
            <span class="c-title-top-jp__child gsp-anime__genre__title">レ</span>
            <span class="c-title-top-jp__child gsp-anime__genre__title">ゼ</span>
            <span class="c-title-top-jp__child gsp-anime__genre__title">ン</span>
            <span class="c-title-top-jp__child gsp-anime__genre__title">ト</span>
            <span class="c-title-top-jp__child gsp-anime__genre__title">ジ</span>
            <span class="c-title-top-jp__child gsp-anime__genre__title">ャ</span>
            <span class="c-title-top-jp__child gsp-anime__genre__title">ン</span>
            <span class="c-title-top-jp__child gsp-anime__genre__title">ル</span>
          </span>
          </h2>
          <ul class="p-genre__list">
            <?php
            $terms = get_terms('genre', ['parent' => 0, 'hide_empty' => 0]);
            foreach ($terms as $term) {
              echo '<li class="p-genre__list__item gsp-anime__genre__100oku__item__detail"><a class="p-genre__list__item__link -' . $term->slug . '" href="' . get_term_link($term) . '"><h3 class="p-genre__list__item__link__title js-span-target">' . $term->name . '</h3></a></li>';
            }
            ?>
          </ul>
        </div>
      </section>
          </div>
    </div>
</div>
<?php get_footer(); ?>
<?php get_template_part('wp-footer'); ?>