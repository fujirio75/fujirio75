<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package fujirio75
 */

get_header('search'); ?>

<main>
<?php
	//クエリーがcat_slugだった場合
	if (get_query_var('cat_slug')) {
		$target_cat = get_category_by_slug(get_query_var('cat_slug')) -> cat_ID;
		$target_tag = get_query_var('tag');

		$arg = 'cat='.$target_cat.'&tag='.$target_tag.'&showposts=8'.'&paged='.(get_query_var('paged') ? get_query_var('paged') : 1);
		query_posts($arg);
	}
?>
	<section class="article search">

				<?php $tag_title = single_tag_title("", false); ?>

				<ul class="clearfix">
						<?php while ( have_posts() ) { the_post(); ?>
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
				</ul>



				<!-- /article-primary -->
			<!-- /article-list -->
			</section>

	<div class="pager">
	    <?php
	    echo paginate_links(array(
	        'total' => $wp_query -> max_num_pages,
	        'mid_size' => 5,
	        'current' => (get_query_var('paged') ? get_query_var('paged') : 1),
	        'prev_text' => '«',
	        'next_text' => '»',
	    )); ?></div>
</main>

<?php get_footer(); ?>