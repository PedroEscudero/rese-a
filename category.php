<?php

/**

 * The template for displaying Category pages.

 *

 * Used to display archive-type pages for posts in a category.

 *

 * Learn more: http://codex.wordpress.org/Template_Hierarchy

 *

 * @package WordPress

 * @subpackage Twenty_Twelve

 * @since Twenty Twelve 1.0

 */



get_header(); ?>



	 



		<?php if ( have_posts() ) : ?>

<div class="col-md-8">

			<header class="archive-header">

				<h1 class="archive-title"><?php printf( __( 'Category Archives: %s', 'twentytwelve' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h1>



			<?php if ( category_description() ) : // Show an optional category description ?>

				<div class="archive-meta"><?php echo category_description(); ?></div>

			<?php endif; ?>

			</header><!-- .archive-header -->



			<?php

			/* Start the Loop */

			while ( have_posts() ) : the_post();



				/* Include the post format-specific template for the content. If you want to

				 * this in a child theme then include a file called called content-___.php

				 * (where ___ is the post format) and that will be used instead.

				 */



$cat=0;

?>

				<?php if($cat==0){ ?>



<div class="inicio" <?php post_class() ?> id="post-<?php the_ID(); ?>">

<h2><a class="titulo_portada" href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

<div class="extracto"><?php 

$contenido=get_the_content(); 



$contenido =substr($contenido,0,1020).' [...]';



echo $contenido;

?>





</div>

<a class="titulo_portada mas" href="<?php the_permalink() ?>" style="position:absolute;bottom:10px;">Leer más</a>

</div>

<?php } ?>

<?php

			endwhile;



			twentytwelve_content_nav( 'nav-below' );

			?>



		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>



</div>	



<?php get_sidebar(); ?>

<?php get_footer(); ?>