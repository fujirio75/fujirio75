<?php/*
Template Name: Archive
*/
?>
<?php get_header();?>

	<?php
$paged = (int) get_query_var('paged');
$args = array(
	'posts_per_page' => 6,
	'paged' => $paged,
	'orderby' => 'post_date',
	'order' => 'DESC',
	'post_type' => 'post',
	'post_status' => 'publish'
);
$the_query = new WP_Query($args);
if ( $the_query->have_posts() ) :
	while ( $the_query->have_posts() ) : $the_query->the_post();
?>
	<div class="post">
		<h1 class="title"><?php the_title(); ?></h1>
		<?php the_content(); ?>
	</div>
<?php endwhile; endif; ?>

<?php
if ($the_query->max_num_pages > 1) {
	echo paginate_links(array(
		'base' => get_pagenum_link(1) . '%_%',
		'format' => 'page/%#%/',
		'current' => max(1, $paged),
		'total' => $the_query->max_num_pages
	));
}
?>

<?php wp_reset_postdata(); ?>
