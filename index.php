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
    <div id="latest-posts-id-qwe" class="slider-container-qwe col-xxl-12"><!--class="latest-posts-class-qwe-->
    <?php slider_qwe(); ?>

    </div><!-- latest-posts-class-qwe end-->
<div class="fir-menu">
<?php wp_nav_menu( 'theme_location' , 'main_header_menu' ); ?>
    </div>    
</header>
<div class="index-articles-and-sidebar"> 
<!-- <div class="prcent80"> -->
<div class="prcent80 prcent80-1920 col-xxl-10 col-xl-4 col-lg-6 col-md-2 col-sm-6 col-6"> 
<?php
			// echo '<div class="show-index">'; 
            ayclam_index();
            // echo '</div>'; 



			// echo '<div class="show-single">'; 
            ayclam_single();
            // echo '</div>'; 

?>

</div>

<div class="prcent20 col-xxl-2 col-xl-8 col-lg-6 col-md-9 col-sm-6 col-6">
<?php get_sidebar( ); ?>
</div>
</div><!-- index-articls-and-sidebar-->
<hr>
<div class="most-seen-posts-qwe .single-show">
    <br>
    <h2>الأكثر مشاهدة</h2>
    <br>
    <?php popular_posts_per_category();?>
</div><!-- most-seen-posts-qwe -->


<hr>
<footer>
<div class="seperation-footer col-xxl-12">

<aside id="footer" class="widget-area-footer">
	<?php dynamic_sidebar( 'footer-1'); ?>
</aside><!-- #secondary -->

</div>

</footer>
</div>
<?php wp_footer(  ); ?>
<script>
    
    document.getElementsByClassName('content_h').innerHTML = "";
    /*x = document.getElementsByClassName('content_h').getElementsByTagName('p');
    x.innerHTML = '';
    var y = document.querySelectorAll('.content_h p');
    y.innerHTML = '';
    */

</script>
</body>
</html>

<?php



?>
