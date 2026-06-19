<?php get_header(); ?>

<main style="padding-top: var(--nav-h); min-height: 60vh; background: var(--sand);">
  <div class="container" style="padding-top: 80px; padding-bottom: 80px;">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article>
        <h1 class="section-title" style="margin-bottom: 32px;"><?php the_title(); ?></h1>
        <div style="font-size: 17px; line-height: 1.8; color: var(--text-body); max-width: 720px;">
          <?php the_content(); ?>
        </div>
      </article>
    <?php endwhile; else : ?>
      <p>Aucun contenu trouvé.</p>
    <?php endif; ?>
  </div>
</main>

<?php get_footer(); ?>
