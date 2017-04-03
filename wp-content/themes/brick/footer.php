    <?php $options = get_option('brick_option'); ?>
      <?php get_template_part( 'inc/footers/footer', 'v'.$options['selectfooter']  ); ?>
       <?php wp_footer(); ?>
    </body>
</html>