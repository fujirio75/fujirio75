<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package fujirio75
 */

get_header(); ?>

		<main>
			<nav class="breadcrumbs clearfix">
				<ol>
					<li><a href="<?php echo home_url(); ?>">トップへ戻る</a></li>
					<li>/</li>
					<li><?php single_cat_title() ?></li>
				</ol>
			</nav>

			<section class="article search">
				<h2 class="article-tag-header">タグ「<?php single_cat_title() ?>」の記事一覧</h2>

				<?php $tag_title = single_tag_title("", false); ?>

				<ul class="clearfix">
				<?php $paged = get_query_var('paged') ? get_query_var('paged') : 1 ; ?>
					<?php $the_query = new WP_Query(array( 'tag' => $tag_title,
																						'paged' => $paged,
																						'posts_per_page' => 8
																				 )); ?>

						<?php while ( $the_query->have_posts() ) {
						       $the_query->the_post();
						?>

						<li>
						    <?php
						    	$_cat = get_the_category();
							    $category = $_cat[0] -> name;
							    $title = get_the_title();
						    ?>
						    <?php add_filter('the_category', 'add_category_en_name'); ?>
						    <p class="category <?php echo set_category_class($category); ?>"><?php the_category(' '); ?></p>
						    <p class="thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></p>
						    <h4><a title="<?php the_title(); ?>" href="<?php the_permalink() ?>">
							<?php if(mb_strlen($post->post_title)>16) { $title= mb_substr($post->post_title,0,16) ; echo $title. '…' ;
							} else {echo $post->post_title;}?></a></h4>
						    <time class="article-date"><?php the_time('(Y年m月d日'); ?>UP)</time>
						    <div class="article-text"><a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a></div>
						    <?php
								$this_tags = get_the_tags();

								foreach ($this_tags as $key):
							?>
								<p class="tag"><a href="<?php echo get_tag_link($key -> term_id); ?>" title="">#<?php echo $key -> name ?></a></p>
							<?php endforeach; ?>
						</li>

						<?php }?>

				<!-- /article-primary -->
				</ul>
			<!-- /article-list -->
			</section>

			<div class="pager">
	    <?php
	    echo paginate_links(array(
	        'total' => $wp_query -> max_num_pages,
	        'mid_size' => 8,
	        'current' => (get_query_var('paged') ? get_query_var('paged') : 1),
	        'prev_text' => '«',
	        'next_text' => '»',
	    )); ?></div>
</main>

<?php get_footer(); ?>