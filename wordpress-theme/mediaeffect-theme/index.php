<?php get_header(); ?>

<main id="main" class="page-main">
	<section class="section page-hero">
		<div class="wrap">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<article <?php post_class( 'page-article' ); ?>>
						<h1><?php the_title(); ?></h1>
						<div class="page-content"><?php the_content(); ?></div>
					</article>
				<?php endwhile; ?>
			<?php else : ?>
				<h1>الصفحة غير موجودة</h1>
				<p><a class="btn btn-green" href="<?php me_home(); ?>">العودة للرئيسية</a></p>
			<?php endif; ?>
		</div>
	</section>
</main>

<?php get_footer(); ?>
