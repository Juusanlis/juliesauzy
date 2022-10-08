<?php
  get_header(); ?>
  <?php get_template_part('templates/header'); ?>

  <main>
    <?php get_template_part('templates/damier'); ?>
    <?php get_template_part('templates/projets'); ?>
    <?php get_template_part('templates/type-de-projets'); ?>
    <?php get_template_part('templates/banner-contact'); ?>
    <?php get_template_part('templates/contact-form'); ?>
    <?php get_template_part('templates/footer'); ?>
  </main>

<?php
  get_footer(); ?>
