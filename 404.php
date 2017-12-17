<?php get_header(); ?>

<section class="content">
	
	<div class="pad group">
	
		<?php get_template_part('inc/page-title'); ?>

		<div class="entry">				
			<p><?php _e( 'Strona nie istnieje lub została przeniesiona. Użyj menu u góry lub pola wyszukiwania, żeby znaleźć, to czego szukasz.', 'anew' ); ?></p>
		</div><!--/.entry-->
		
	</div><!--/.pad-->
	
</section><!--/.content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>