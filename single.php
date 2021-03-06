<?php get_header();?>

<div id = "header" class = "page-header">
    <div style = "overflow:hidden;width:max(1000px,100%);">
      <h1  id = "toc-name" class = "t" style = "color:#fff2f0">Ken Yokokawa</h1>
    </div>
    <h2 style = "color:#fff2f0">Blog</h2>
</div>

<div class = "general-container" id = "first-container">

	<h3><?php the_title();?></h3>

	<?php if (have_posts()) : while(have_posts()) : the_post();?>
		<h5><?php the_date(); ?></h5>
		<p><?php the_content();?></p>
	<?php endwhile; endif;?>

</div>
<div style = "height:150px;"></div>

<script>
  window.onscroll = function() {scrollUpdate()};
  var header = document.getElementById("header");
  document.getElementById("first-container").style.marginTop = document.getElementById('header').offsetHeight+"px";
  var resumeBox = document.getElementById("resume-box")
  resumeBox.style.height = Math.floor(resumeBox.getBoundingClientRect().width * 1.3)+"px";
  function scrollUpdate() {
    header.style.marginTop= Math.floor((-window.pageYOffset)/5.8)+"px";
    
  }
</script>

<?php get_footer();?>