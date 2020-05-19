<?php get_header();?>



<div class="container">

	<h3><?php the_title();?></h3>



	<?php if (have_posts()) : while(have_posts()) : the_post();?>
		<?php the_content();?>
	<?php endwhile; endif;?>

</div>


<?php get_footer();?>