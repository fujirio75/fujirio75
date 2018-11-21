<?php
get_header(); ?>

		<section class="content article-list">

		<?php
					$category = get_the_category();
					$cat_id   = $category[0]->cat_ID;
					$cat_name = $category[0]->cat_name;
					$cat_slug = $category[0]->category_nicename;
				?>

			<ul>
			<?php if ( have_posts() ) : ?>
				<?php query_posts('cat='.$cat_id.'&showposts=6'); ?>
					<?php while(have_posts()):the_post();?>
						<li>
						<?php
							$cat = $category[0] -> name;
							$title = get_the_title();
						?>
						<?php add_filter('the_category', 'add_category_en_name'); ?>
							<a title="<?php the_title(); ?>" href="<?php the_permalink() ?>">
								<div class="category"></div>
								<?php the_post_thumbnail(); ?>
								<section class="info">
									<h4><?php if(mb_strlen($post->post_title)>17) { $title= mb_substr($post->post_title,0,17) ; echo $title. '…' ;
											} else {echo $post->post_title;}?></h4>
									<time><?php the_time('Y/m/d'); ?></time>
									<?php the_excerpt(); ?>
									<div class="tag-list"></div>
								</section>
							</a>
						</li>
					<?php endwhile; wp_reset_postdata(); ?>
				<?php remove_filter('the_category', 'add_category_en_name'); ?>


			<?php else : ?>
				<li>
					<div class="category"></div>
					<img src="<?php bloginfo('stylesheet_directory'); ?>/img/seika-mirai_eyecatch.png">
					<section class="info">
						<h4>まだこのカテゴリーの記事はありません。</h4>
						<time>-/-</time>
						<p></p>
						<div class="tag-list"></div>
					</section>
				</li>

			<?php endif; ?>
			</ul>
		</section>

	</main>


<?php get_footer(); ?>