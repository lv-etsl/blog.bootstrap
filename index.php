<?php
/*
*
* le fichier index est primaire. il cumule le header, content et footer. sidebar si utlisé.
*
*/
?>
<?php get_header(); ?>

<div class="container">
  <!-- boucle simple -->
  <?php if(have_post()); ?>
    <?php while (have_posts()) : the_post(); ?>

      <article <?php post_class('row'); ?>>
        <div>
          <?php the_content(); ?>
        </div>
      </article>

    <?php endwhile; ?>

    <div class="row">
        <?php wp_links_pages(array(
          'separator' => ' - ',
          'nextpagelink' => 'suivant',
          'previouspagelink' => 'précédente',
        )); ?>
    </div>

  <?php else: ?>

    <article class="row">
      <h2>Page introuvable</h2>
      <p>Cette page n'existe pas, désolé.</p>
    </article>

  <?php endif; ?>

</div>

<?php get_footer(); ?>
