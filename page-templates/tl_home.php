<?php
/**
 * Template Name: Tech Lilbrary Home
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="main-content" class="main-content">

<?php
	if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}
?>

	<div id="primary" class="content-area">
		<div id="content" class="site-tl-main" role="main">
      
      <h1 class="entry-title">Technical Library</h1>
        <div class="carousel_wrap clear">
    <button class="shift_left">&lt;</button>
    <div class="carousel">
      <div class="slide_wrap" data-slides="6">
        <div class="slide" data-slide="1">
          <div class="img_wrap">
            <div class="img_wrap_inner">
              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/698/v_Thum_1.jpg" alt="" />
            </div>
          </div>
          <div class="slide_footer">
            <a href="">Link title</a>
          </div>
        </div>
        <div class="slide" data-slide="2">
          <div class="img_wrap">
            <div class="img_wrap_inner">
              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/698/v_Thum_2.jpg" alt="" />
            </div>
          </div>
          <div class="slide_footer">
            <a href="">Link title</a>
          </div>
        </div>
        <div class="slide" data-slide="3">
          <div class="img_wrap">
            <div class="img_wrap_inner">
              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/698/v_Thum_3.jpg" alt="" />
            </div>
          </div>
          <div class="slide_footer">
            <a href="">Link title</a>
          </div>
        </div>
        <div class="slide" data-slide="4">
          <div class="img_wrap">
            <div class="img_wrap_inner">
              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/698/v_Thum_4.jpg" alt="" />
            </div>
          </div>
          <div class="slide_footer">
            <a href="">Link title</a>
          </div>
        </div>
        <div class="slide" data-slide="5">
          <div class="img_wrap">
            <div class="img_wrap_inner">
              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/698/v_Thum_5.jpg" alt="" />
            </div>
          </div>
          <div class="slide_footer">
            <a href="">Link title</a>
          </div>
        </div>
        <div class="slide" data-slide="6">
          <div class="img_wrap">
            <div class="img_wrap_inner">
              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/698/v_Thum_6.jpg" alt="" />
            </div>
          </div>
          <div class="slide_footer">
            <a href="">Link title</a>
          </div>
        </div>
      </div>
    </div>
    <button class="shift_right">&gt;</button>
  </div>
			
      <div class="wrap">
        
<div class="card bigger">
  <h1 class="tl_card_h1">Filter Vials</h1>
  <img class="tl_card_icon" src="http://0072015.htslabs.com/wp-content/uploads/2015/08/tl_FV_icon.png" width="120" height="140" alt="" />
  <ul class="tl_list">
    <li><a href="#">General Information</a></li>
    <li><a href="#">FAQ's</a></li>
    <li><a href="#">Videos</a></li>
    <li><a href="#">Application Notes</a></li>
    <li><a href="#">Comparisons</a></li>
    <li><a href="#">Published Works</a></li>
  </ul>
  <footer class="tl_card_footer"><a href="http://0072015.htslabs.com/filter-vials/">Product Page</a></footer>
</div>
  
<div class="card bigger">
  <h1 class="tl_card_h1">Optimum Growth&trade;</h1>
  <img class="tl_card_icon" src="http://0072015.htslabs.com/wp-content/uploads/2015/08/tl_OG_icon.png" width="120" height="140" alt="" />
  <ul class="tl_list">
    <li><a href="#">General Information</a></li>
    <li><a href="#">FAQ's</a></li>
    <li><a href="#">Videos</a></li>
    <li><a href="#">Application Notes</a></li>
    <li><a href="#">Comparisons</a></li>
    <li><a href="#">Published Works</a></li>
  </ul>
  <footer class="tl_card_footer"><a href="http://0072015.htslabs.com/cell-culture/optimum-growth-flasks/">Product Page</a></footer>
</div>
  
<div class="card">
  <h1 class="tl_card_h1">Transfer Caps</h1>
  <img class="tl_card_icon" src="http://0072015.htslabs.com/wp-content/uploads/2015/08/tl_TC_icon.png" width="120" height="140" alt="" />
  <ul class="tl_list">
    <li><a href="#">General Information</a></li>
    <li><a href="#">FAQ's</a></li>
    <li><a href="#">Videos</a></li>
    <li><a href="#">Application Notes</a></li>
    <li><a href="#">Published Works</a></li>
  </ul>
  <footer class="tl_card_footer"><a href="http://0072015.htslabs.com/cell-culture/optimum-growth-flasks/optimum-growth-transfer-caps/">Product Page</a></footer>
</div>
  
<div class="card">
  <h1 class="tl_card_h1">Ultra Yield&trade; Flasks</h1>
  <img class="tl_card_icon" src="http://0072015.htslabs.com/wp-content/uploads/2015/08/tl_UYF_icon.png" width="120" height="140" alt="" />
  <ul class="tl_list">
    <li><a href="#">General Information</a></li>
    <li><a href="#">FAQ's</a></li>
    <li><a href="#">Videos</a></li>
    <li><a href="#">Application Notes</a></li>
    <li><a href="#">Comparisons</a></li>
    <li><a href="#">Published Works</a></li>
  </ul>
  <footer class="tl_card_footer"><a href="http://0072015.htslabs.com/cell-culture/ultra-yield-flasks/">Product Page</a></footer>
</div>
  
<div class="card">
  <h1 class="tl_card_h1">Plasmid+&reg;</h1>
  <img class="tl_card_icon" src="http://0072015.htslabs.com/wp-content/uploads/2015/08/tl_PLASMID_icon.png" width="120" height="140" alt="" />
  <ul class="tl_list">
    <li><a href="#">General Information</a></li>
    <li><a href="#">FAQ's</a></li>
    <li><a href="#">Videos</a></li>
    <li><a href="#">Application Notes</a></li>
    <li><a href="#">Tools</a></li>
  </ul>
  <footer class="tl_card_footer"><a href="http://0072015.htslabs.com/cell-culture/ultra-yield-flasks/plasmid-media/">Product Page</a></footer>
</div>
  
<div class="card">
  <h1 class="tl_card_h1">AirOtop Seals</h1>
  <img class="tl_card_icon" src="http://0072015.htslabs.com/wp-content/uploads/2015/08/tl_AT_icon.png" width="120" height="140" alt="" />
  <ul class="tl_list">
    <li><a href="#">General Information</a></li>
    <li><a href="#">Videos</a></li>
    <li><a href="#">Comparisons</a></li>
  </ul>
  <footer class="tl_card_footer"><a href="http://0072015.htslabs.com/cell-culture/ultra-yield-flasks/airotop-enhanced-flask-seals/">Product Page</a></footer>
</div>

<div class="card">
  <h1 class="tl_card_h1">Flask Chromatography</h1>
  <img class="tl_card_icon" src="http://0072015.htslabs.com/wp-content/uploads/2015/08/tl_FC_icon.png" width="120" height="140" alt="" />
  <ul class="tl_list">
    <li><a href="#">General Information</a></li>
  </ul>
  <footer class="tl_card_footer"><a href="http://0072015.htslabs.com/flash-chromatography/">Product Page</a></footer>
</div>
  
<div class="card">
  <h1 class="tl_card_h1">Glassware</h1>
  <img class="tl_card_icon" src="http://0072015.htslabs.com/wp-content/uploads/2015/08/tl_GW_icon.png" width="120" height="140" alt="" />
  <ul class="tl_list">
    <li><a href="#">General Information</a></li>
    <li><a href="#">Published Works</a></li>
  </ul>
  <footer class="tl_card_footer"><a href="http://0072015.htslabs.com/glassware/">Product Page</a></footer>
</div>
</div><!-- END wrap -->
		</div><!-- #content -->
	</div><!-- #primary -->
</div><!-- #main-content -->

<?php
get_sidebar();
get_footer();