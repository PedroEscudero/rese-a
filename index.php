<?php



get_header(); ?>

<?php if (have_posts()) : ?>

   <div class="col-md-8">

      <?php query_posts( '&posts_per_page=300' );

      while (have_posts()) : the_post(); 





?>

<?php 

$cat=0;

foreach((get_the_category()) as $category) { 

    //echo $category->cat_ID . '-';



if($category->cat_name=='Libros Destacados'){

$cat=1;



}

 } ?>



<?php if($cat==1){ ?>



<div class="inicio" <?php post_class() ?> id="post-<?php the_ID(); ?>">

<h2><a class="titulo_portada" href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

<div class="extracto"><p><?php 

$contenido=get_the_content(); 
$post_id = get_the_ID();
$post = get_post($post_id);
$contenido=$post->post_content;

$longitud=1020;
$intermedio =substr($contenido,0,$longitud);

while(mb_strlen($intermedio)>1020){
$intermedio =substr($contenido,0,$longitud);
$longitud--;
}
$contenido=$intermedio;

echo $contenido;

?>

</p>



</div>

<a class="pie_portada mas" href="<?php the_permalink() ?>" style="position:absolute;bottom:20px;">Leer más</a>

</div>

<?php } ?>

<?php endwhile; ?>



</div>



<?php else : ?>

No hay nada

<?php endif; ?>



<?php get_sidebar(); ?>

<?php get_footer(); ?>