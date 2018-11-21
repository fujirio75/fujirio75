<?php
get_header(); ?>

		<section id="top" class="contents-top contents-colorscheme-transparent">

		</section>

		<div class="contents-wrapper">
			<section class="article-contents-wrapper">
				<?php if ( have_posts() ) : ?>
				<?php $primary_posts = get_posts(array('numberposts' => 10)); ?>
				<?php foreach ( $primary_posts as $post ) : setup_postdata( $post ); ?>
				<div class="article-contents">
					<?php
						$_cat = get_the_category();
						$cat_name = $_cat[0] -> name;
						$title = get_the_title();
						$thumb_id = get_post_thumbnail_id();                         // アイキャッチ画像のIDを取得
						$thumb_img = wp_get_attachment_image_src($thumb_id, $size);  // $sizeサイズの画像内容を取得
						$thumb_src = $thumb_img[0];    // 画像のurlだけ取得
					?>
					<?php add_filter('the_category', 'add_category_en_name'); ?>
					<a title="<?php the_title(); ?>" href="<?php the_permalink() ?>">
						<canvas class="bg-wave">
						</canvas>
						<div class="article-eyecatch"></div>
						<div class="article-contents-info-wrapper">
							<div class="article-contents-info-inner">
								<div class="info-title">
									<h2><?php if(mb_strlen($post->post_title)>35) { $title= mb_substr($post->post_title,0,35) ; echo $title. '…' ;
											} else {echo $post->post_title;}?></h2>
								</div>
								<div class="info-description">
									<p><span class="">direction,logo design,web design</span>/<span class=""><?php the_time('Y'); ?></span></p>
								</div>
							</div>
						</div>
					</a>
				</div>
				<?php endforeach; wp_reset_postdata(); ?>
					<?php remove_filter('the_category', 'add_category_en_name'); ?>

				<?php else : ?>
					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>
				<div class="article-contents">
					<a href="#">
						<canvas class="bg-wave">
						</canvas>
						<div class="article-eyecatch"></div>
						<div class="article-contents-info-wrapper">
							<div class="article-contents-info-inner">
								<div class="info-title">
									<h2>セイカハッカソン</h2>
								</div>
								<div class="info-description">
									<p><span class="">direction,logo design,web design</span>/<span class="">2016-2017</span></p>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="article-contents">
					<a href="#">
						<canvas class="bg-wave">
						a</canvas>
						<div class="article-eyecatch"></div>
						<div class="article-contents-info-wrapper">
							<div class="article-contents-info-inner">
								<div class="info-title">
									<h2>セイカハッカソン</h2>
								</div>
								<div class="info-description">
									<p><span class="">direction,logo design,web design</span>/<span class="">2016-2017</span></p>
								</div>
							</div>
						</div>
					</a>
				</div>

			</section>
		</div>

<?php get_footer(); ?>
