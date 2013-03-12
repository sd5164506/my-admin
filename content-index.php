<article id="post-<?php the_ID(); ?>" class="well">
	<?php $categories = get_the_category($post->ID);
		  $cate = getReadCate($categories);
	?>
	<div class="entry-title">
		<div class="cat-title">
			<a href="<?php echo get_category_link($cate->term_id) ?>">
				<h4 class="cat_<?php echo $cate->cat_ID;?>">
					<?php echo $cate->name;?>
				</h4>
			</a>
		</div>	
		<h2><a href="<?php the_permalink() ?>" ><?php the_title(); ?></a></h2>
		<div class="clear"></div>
	</div>
	<div class="entry-meta">
		<div class="post_on"><?php wan_posted_on(); ?></div>
		<div class="clear"></div>
	</div>
	<div class="entry-excerpt of">
		<?php the_excerpt(); ?>
	</div>
	<div class="img-review">
		<?php
			get_template_part('imageshow'); 
		?>
	</div>
	<div class="clear"></div>
	
	<div class="commit-views commit">
		<div class="commit-box" ><a href="<?php the_permalink()?>#commits"><?php echo $post->comment_count; ?>评论</a></div>
	</div>
	
	<div class="ding-cai">
		<?php GetWtiLikePost(); ?>
	</div>

	<div class="clear"></div>

</article>
<div class="clear"></div>
