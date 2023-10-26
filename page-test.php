<!DOCTYPE html>
<html <?php language_attributes(  ); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title( $sep= "|", $display=true, $seplocation="" ); ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(  );?>/style.css">
    <!-- <link rel="stylesheet" href="<?php //echo get_template_directory_uri(  );?>/css/bootstrap-grid.rtl.css"> -->
    <!--link rel="stylesheet" href="<?php //echo get_template_directory_uri(  );?>/css/bootstrap-grid.css"-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap-grid.rtl.min.css" >

<?php wp_head(  ); ?>
</head>
<body <?php body_class(  ); ?>>
<div class="container-1920 ">
    <header>
        <div class="sec-menu">
    <?php wp_nav_menu( array ('theme_location' => 'secandry_header_menu') ); ?>
</div>
<!-- latest-posts-class-qwe start-->
    <!-- <div id="latest-posts-id-qwe" class="slider-container-qwe col-xxl-12"> -->
    <?php //slider_qwe(); ?>

    <!-- </div> -->
<div class="fir-menu">
<?php wp_nav_menu( 'theme_location' , 'main_header_menu' ); ?>
    </div>    
</header>
<div class="index-articles-and-sidebar"> 
<!-- <div class="prcent80"> -->
<div class="prcent80 prcent80-1920 col-xxl-10 col-xl-4 col-lg-6 col-md-2 col-sm-6 col-6"> 
<?php
	if(have_posts(  )){
	
		while(have_posts(  )){
				echo '<div class="prcent100 col-xxl-12">'; 
		
				the_post();
				echo '<div class="thumbnail-all">';
				the_post_thumbnail();
				echo '</div>';
				?>  
				  <h2 class="post_title">
					  <a href="<?php the_permalink(); ?>">
						<?php the_title(  ); ?>
					</a>
				</h2>
		

		<!-- <div class="postedby-index">
			<a href="<?php permalink_link(  ); ?>"><span>الكاتب:<?php the_author_posts_link();?>  , </span></a>
			<a href="<?php the_permalink(); ?>"><span> النشر في :<?php the_date( get_option( 'date_format', 'F Y')); ?></span></a>
		</div> -->
		<!-- END post by class -->
		
		
		<div class="the_contents">
			<!-- <div class="content_h"> -->
				<?php the_content( ); ?>
			<!-- </div> -->
			<!-- <div class="excerpt_h"> -->
				<?php // the_excerpt( ); ?>
			<!-- </div> -->
			
		</div>
		</div><!-- class persent100 -->
	
		
		<?php
			}
		}

?>

</div>

<div class="prcent20 col-xxl-2 col-xl-8 col-lg-6 col-md-9 col-sm-6 col-6">
<?php get_sidebar( ); ?>
</div>
</div><!-- index-articls-and-sidebar-->

<footer>
<div class="seperation-footer col-xxl-12">

<aside id="footer" class="widget-area-footer">
	<?php dynamic_sidebar( 'footer-1'); ?>
</aside><!-- #secondary -->

</div>

</footer>
</div>
<?php wp_footer(  ); ?>

</body>
</html>

<?php



?>
