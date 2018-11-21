<?php
/* Template Name: 記事ページ */
?>

<?php
get_header(); ?>

<?php
	if(have_posts()):while(have_posts()):the_post();
		$thumbnail_id = get_post_thumbnail_id();
		$eye_img = wp_get_attachment_image_src( $thumbnail_id , 'large' );
?>

		<section class="contents-top">
			<?php echo '<img src="'.$eye_img[0].'">';　 ?>
		</section>

		<section class="page-contents-article contents-colorscheme-transparent">
			<div class="contents-wrapper">

				<div class="contents-info-post">
					<?php
					    $big = 9999999999;
					    $arg = array(
					        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
					        'current' => max( 1, get_query_var('paged') ),
					        'total'   => $wp_query->max_num_pages
					    );
					    echo paginate_links($arg);
					?>
				<?php $author_id = $post->post_author; ?>
					<time><?php the_time('Y.m.d'); ?></time>
					<p>written by</p>
					<p><?php the_author(); ?></p>
					<p class="role"><?php the_author_meta('position'); ?></p>
				</div>

				<div class="contents-paragraph">
					<h1><?php echo $post->post_title; ?></h1>
					<div class="contents-paragraph-main">
						<?php the_content(); ?>
					</div>
				</div>

			</div>
		</section>

<?php endwhile;endif; ?>

	</main>

<?php get_footer(); ?>
