  <footer class="site-footer">
    <div class="container footer-grid">
      <div class="footer-brand">
        <span class="footer-logo">Tom Madon</span>
        <span class="footer-logo-sub">Planificateur financier, Pl. Fin., IQPF</span>
        <p class="footer-address">Laval, Québec · Grand Montréal</p>
      </div>
      <nav class="footer-nav">
        <?php
        wp_nav_menu([
          'theme_location' => 'footer',
          'container'      => false,
          'fallback_cb'    => function () {
              echo '<ul>
                <li><a href="/">Accueil</a></li>
                <li><a href="/planification-retraite/">Planification de la retraite</a></li>
                <li><a href="/placements/">Placements</a></li>
                <li><a href="/gestion-patrimoine/">Gestion de patrimoine</a></li>
                <li><a href="/remuneration/">Rémunération</a></li>
                <li><a href="/a-propos/">À propos</a></li>
                <li><a href="/contact/">Contact</a></li>
              </ul>';
          },
        ]);
        ?>
      </nav>
      <div class="footer-legal">
        <p>Tom Madon est membre de l'Institut québécois de planification financière (IQPF) et encadré par l'Autorité des marchés financiers (AMF).</p>
        <p class="footer-copy">© <?php echo date('Y'); ?> Tom Madon, Pl. Fin. Tous droits réservés.</p>
      </div>
    </div>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>
