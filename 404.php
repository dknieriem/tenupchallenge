<?php get_header(); ?>

	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Nope', 'tenupchallenge' ); ?></h1>
	</header><!-- .page-header -->

  <article class="main-content">
    <p><?php esc_html_e( "Sorry, there's really not much to this site. Maybe go home?", 'tenupchallenge' ); ?></p>
    <p><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></p>
  </article>

<?php
get_footer();
